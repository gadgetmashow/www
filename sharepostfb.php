<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การตลาด Online GadGetMaShow.com</title>
</head>

<body>
<H1>การตลาด Online GadGetMaShow.com</H1>
<br />
</body>
</html>

<?php
include('http://game-mun.com/wordsai.php');//===include ไฟล์ wordsai.php เพื่อเรียกใช้งาน api
$WordsAi = new apiWordsAi();//=เรียกใช้ class apiWordsAi  เพื่อเรียกใช้งาน api

$configWordsAi['username']='truemoney@me.com';//==	เป็นอีเมล์ที่ใช้ Login ในเว็บไซต์ http://www.wordsai.com/
$configWordsAi['password']='gclub1991';//==	เป็นรหัสผ่านที่ใช้ Login ในเว็บไซต์ http://www.wordsai.com/
$configWordsAi['tagspin']=1;//==		0=ต้องการบทความปกติ,		1=ต้องการบทความแบบแท็กสปิน
$configWordsAi['token']='b939bc6661ccdc38330cebccec108479';//==Token ของชื่อเว็บคุณซึ่งจะได้มาจากการเพิ่มเว็บเข้าไปในการตั้งค่า API ในเว็บไซต์ http://www.wordsai.com/
//$configWordsAi['str']='เนื้อหาของบทความที่ต้องการจะนำมารีไรท์';//==บทความที่ต้องการสปิน


$result=$WordsAi->spin($configWordsAi['username'],$configWordsAi['password'],$configWordsAi['tagspin'],$configWordsAi['token'],$configWordsAi['str']);

$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_month_arr=array(
    "0"=>"",
    "1"=>"มกราคม",
    "2"=>"กุมภาพันธ์",
    "3"=>"มีนาคม",
    "4"=>"เมษายน",
    "5"=>"พฤษภาคม",
    "6"=>"มิถุนายน", 
    "7"=>"กรกฎาคม",
    "8"=>"สิงหาคม",
    "9"=>"กันยายน",
    "10"=>"ตุลาคม",
    "11"=>"พฤศจิกายน",
    "12"=>"ธันวาคม"                 
);
function thai_date($time){
    global $thai_day_arr,$thai_month_arr;
    $thai_date_return="วัน".$thai_day_arr[date("w",$time)];
    $thai_date_return.="ที่ ".date("j",$time);
    $thai_date_return.=" ".$thai_month_arr[date("n",$time)];
    $thai_date_return.=" ".(date("Y",$time)+543);
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;
}
function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
    global $thai_day_arr,$thai_month_arr;   
    $thai_date_return.=date("j",$time);   
    $thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " เวลา ".date("H:i:s",$time);	
    return $thai_date_return;   
}
?>

<?php

date_default_timezone_set('Asia/Bangkok');

$dateData=time(); // วันเวลาขณะนั้น
echo thai_date_and_time($dateData); // 19 ธันวาคม 2556 เวลา 10:17:48
echo "<br />";
echo thai_date($dateData);
echo "<br />";
//Title Spin
//$title ="{Title Spin1:|+-Spin Title2-+:|Spin Title Spin3:|Title Title Spin Spin4:} IMACROS+SPIN WORDPRESS NETWORK BY MEEN";

$d = date("Y-m-d");

echo date("Y-m-d");


//if ($d == '2016-09-30') echo " << this time";

if ($d == '2017-11-04') {
	echo "<br />";
	echo ' ขณะนี้ โปรแกรมหมดอายุ โปรดติดต่อ Line id <a href="http://bitly.com/linenow">@gadgetmashow</a>  หรือ Fanpage: <a href="http://m.me.com/GadGetMaShow">http://www.facebook.com/GadGetMaShow</a>';
} else {

//$title='{11|22}.jpg';
$title='11.jpg';
//$title='{11|22|33|44|55}.jpg';

//Content Spin

/*
$spin_content='ตู้คีบตุ๊กตา D.I.Y
แต่... เดี๋ยวก่อน ถ้ามันจะยากขนาดนี้ 
📌 สั่งซื้อได้ที่นี่ >> https://www.facebook.com/GadGetMaShow/videos/1635872833110111/
.
#ตู้คีบตุ๊กตา #ตู้คีบ #ขายตู้คีบตุ๊กตา #ตู้คีบตุ๊กตาราคาถูก #ของขวัญ #ของขวัญวันเกิด #ของขวัญให้แฟน #ของขวัญปีใหม่ #ของขวัญวันปีใหม่ #ของขวัญวันวาเลนไทน์ #ขายของเล่น #ขายของขวัญ #ของเล่นแปลกๆ #ของเล่นไฮเทค #GadGetMaShow
.
';
*/

$spin_content='สินค้ากล้องวงจรปิด เน้นกลุ่มไอที เทคโนโลยี ความปลอดภัยบ้าน โรงงาน ร้านค้าค่ะ 
คลิกดู >> https://www.facebook.com/superfocuscctv/videos/696964303845862/
.
Super Focus กล้องวงจรปิดไอพี Wireless ไร้สาย 1.3 ล้านพิกเซล 
.
#คมชัดทะลุจอ ระดับ Full HD ซูเปอร์อินฟราเรด #ติดตั้งเองได้
#ดูออนไลน์บนมือถือ รับประกัน 2 ปี ส่งฟรีทั่วประเทศ
คลิก!! ดูรายละเอียดเพิ่มเติม http://www.superfocuscctv.com/
Inbox: m.me/superfocuscctv
Line ID: @superfocus หรือคลิ๊ก https://line.me/ti/p/@superfocus
หรือโทรด่วน: 094-7829414, 099-4729222
.
';

//Tags Spin
//$spin_tags="{tag1,tag1.2,tag1.3|tag2,tag2.1,tag2.3|tag3,tag3.1,tag3.2 }";

//$spin_tags="กระเช้าของขวัญ, กระเช้าปีใหม่, กระเช้า, {กระเช้าของขวัญ|กระเช้าปีใหม่|กระเช้า}หาซื้อได้ที่, {กระเช้าของขวัญ|กระเช้าปีใหม่|กระเช้า}ราคา, ขาย{กระเช้าของขวัญ|กระเช้าปีใหม่|กระเช้า}";
$spin_tags="Gadgetmashow.com, FB.com/GadGetMaShow, หมดอายุ 1 เดือน, สั่งซื้อ ติดต่อ Line @gadgetmashow, หมดอายุ 31 ตุลาคม 2559";

$configWordsAi['str']=$spin_content;//==บทความที่ต้องการสปิน

function spin($a){
if(preg_match('#\{(.+?)\}#is',$a,$b))
{
if(($i=strpos($b[1],'{'))>-1)$b[1]=substr($b[1],$i+1);$c=explode('|', $b[1]);$a=preg_replace("+\{".preg_quote($b[1])."\}+is", $c[array_rand($c)],$a,1);return spin($a);}return $a;
}

echo "<form id='form1' name='form1' method='post' action='spin.php'>";

  echo "<label>Title:<br />";
  echo "<textarea name='title' id='title' cols='100' rows='5'>";
  echo spin($title);
  echo "</textarea>";
  echo "</label>";
 echo "<p>";
    echo "<label>Content:<br />";
    echo "<textarea name='content' id='content' cols='100' rows='5'>";
    echo spin($spin_content);
	echo "วันนี้ ". thai_date($dateData);
	//echo "วันนี้ ".$d;
    echo "</textarea>";
    echo "</label>";
 echo "</p>";
 echo "<p>";
    echo "<label>Tags:<br />";
    echo "<textarea name='tags' id='tags' cols='100' rows='5'>";
    echo spin($spin_tags);
    echo "</textarea>";
    echo "</label>";
 echo "</p>";

echo "</form>";

}

?>

<p>ข้อความแจ้งเตือน : <?=$result['message']?></p>
<p>บทความต้นฉบับ : <?=$result['words_original']?></p>
<p>บทความที่สปินแล้ว : <?=$result['words']?></p>

