<html>
<head>
<title>เริ่มโพสเว็บไซต์</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
</head>
<body>
<?php
include 'simple_html_dom.php';
include 'setting.php';
include 'connect.php';
$client = new Login();
$form_data = array(
'keys' =>$_GET['keys']
);
class Login {

	public function get($url,$data) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
		if (!empty($data)) {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		}
		$html=curl_exec($ch);
		if($html)
		{
			return $html;
		}
		curl_close($ch);
	}

}
class Spintax
{
	public function process($text)
	{
		return preg_replace_callback(
		'/\{(((?>[^\{\}]+)|(?R))*)\}/x',
		array($this, 'replace'),
		$text
		);
	}
	public function replace($text)
	{
		$text = $this->process($text[1]);
		$parts = explode('|', $text);
		return $parts[array_rand($parts)];
	}
}
function findurl($data)
{
	for($i=0;$i<count($data);$i++)
	{
		$v=$data[$i];
		if($v[status]==0)
		{
			return $i;
		}
	}
}
function post($url,$detail,$id,$username,$password,$baseurl)
{
	$spintax = new Spintax();
	include_once('simple_html_dom.php');
	$data=explode('<sep>',$detail);
	$val=explode(';',$data[1]);
	$key=explode(';',$data[0]);
	$arr=array();
	for($i=1;$i<count($val);$i++)
	{
		$arr[$key[$i]]=$val[$i];
	}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url.'/login.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$username.'&pass='.$password.'&submit=เข้าสู่ระบบ');
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$store = curl_exec($ch);
	curl_setopt($ch, CURLOPT_URL, $url.'/member/classifieds-post.php');
	$page = curl_exec($ch);
	$page=str_replace('<form action="p-classifieds-post.php"','<form action="'.$url.'/member/p-classifieds-post.php" id="testform" ',$page);
	$page=str_replace('data_for_list2.php',$url.'/member/data_for_list2.php',$page);
	$page=str_replace('required','',$page);
	$page=str_replace('<option value="">- เลือกหมวดหมู่ย่อย -</option>',file_get_contents($url.'/member/data_for_list2.php?cate_id=1'),$page);
	$page=str_replace('</body>','<script src="fillform.js"></script></body>',$page);
	$html = str_get_html($page);
	foreach ($html->find('input') as $element) {
		if($element->name=='rands')
		{$arr[$element->name] = $element->value;}
	}
	$arr[post_title]=$spintax->process($arr[post_title]);
	$arr[post_s_detail]=$spintax->process($arr[post_s_detail]);
	$arr[detail]=$spintax->process($arr[detail]);
	$arr[capcha]=$arr[rands];
	$fields_string='';
	foreach($arr as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');
	curl_setopt($ch, CURLOPT_URL, $url.'/member/p-classifieds-post.php');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
	$ss = curl_exec($ch);
	echo '<meta http-equiv="refresh" content="3; url='.$baseurl.'post.php?id='.$id.'" />';
}
include 'connect.php';
$sql="select * from task where id=".$_GET[id];
$re=mysql_query($sql);
$acc=mysql_fetch_array($re);
$site=str_replace('[','',$acc[web]);
$site=str_replace(']','',$site);
$ex=explode('},',$site);
$arr=array();
foreach($ex as $v)
{
	$ck=$v.'}';
	$arr[]=json_decode($ck,true);
}
$ind=findurl($arr);
$url=$arr[$ind]['url'];
$arr[$ind]['status']='1';
$upd=json_encode($arr);
$sql="UPDATE `task` SET `web` = '{$upd}' WHERE `task`.`id` = {$_GET[id]};";
mysql_query($sql);
$url='http://'.$url;
$data=explode('<sep>',$acc[detail]);
$val=explode(';',$data[1]);
$acc_id=$val[0];
$sqa="select * from account where id=".$acc_id;
$que=mysql_query($sqa);
$ac=mysql_fetch_array($que);
post($url,$acc[detail],$_GET[id],$ac[email],$ac[password],$website);
$data=explode('<sep>',$acc[detail]);
$val=explode(';',$data[1]);
$page = $client -> get($url."/search-tag.php?tag=".$val[8], $form_data);
$f=strpos($page,'<p style="color: #666;');
$l=strpos($page,'</p>',$f);
$page=substr($page,$f,$l-$f);
$dom=str_get_html($page);
$task_id=$acc[id];
foreach($dom->find('table,a') as $val)
{
	if(strpos($val->href,'.html'))
	{
		$link=$val->href;
		$sql="INSERT INTO `loglink` (`id`, `url`, `task_id`) VALUES (NULL, '{$link}', '{$task_id}');";
		mysql_query($sql);
	}
	echo $val->href.'<br>';
	echo '<br>';
	flush();
	ob_flush();
} 
?>