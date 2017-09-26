<?php
function genscript($email,$pass)
{
	$script='<script>
	window.onload = function setActualDate() {
    $("#loginForm input, #loginForm select").each(
    function(index){  
        var input = $(this);
		if(input.attr("type")=="email")
		{
			input.val("'.$email.'");
		}
		if(input.attr("type")=="password")
		{
			input.val("'.$pass.'");
		}
		$("#capcha").val($("#rands").val());
		$.post($("#loginForm").attr("action"), $("#loginForm").serialize());

    }	
);};</script>';
	return $script;
}
?>
<html lang="th">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>สมัครสมาชิก</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/themes.css"/>
  <link rel="stylesheet" href="css/plugins.css"/>
</head>
</body>
<?php
include 'setting.php';
include 'connect.php';
include 'simple_html_dom.php';
ob_start();
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

        return curl_exec($ch);
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
$sql="select * from account where id=".$_GET[id];
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
$sql="UPDATE `account` SET `web` = '{$upd}' WHERE `account`.`id` = {$_GET[id]};";
mysql_query($sql);
$url='http://'.$url;
register($url,$acc[email],$acc[password]);
function register($url,$email,$pass)
{
$client = new Login();
$form_data = array( 'check' => '1');
$url=trim($url);
$page = $client -> get($url."/register.php", $form_data);
$page=str_replace('p-register.php',$url.'/p-register.php',$page);
$page=str_replace('<input type="reset" name="submit" id="submit" value="ยกเลิก" class="btn btn-danger">','',$page);
$page=str_replace('required','',$page);
$page=str_replace('</body>', genscript($email,$pass).'</body>',$page);
echo str_replace('ลงทะเบียนสมัครสมาชิก','กำลังดำเนินการสมัครสมาชิกเว็บ '.$url,$page); 	
$id=$_GET[id];
echo '<meta http-equiv="refresh" content="3; url='.$website.'register.php?id='.$id.'" />';
}
?>
</body>