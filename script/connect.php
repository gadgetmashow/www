<?php
$host="localhost";
$user="root";
$pw="126985042";
$dbname="postweb";
$c = mysql_connect($host,$user,$pw);
$cs1 = "SET character_set_results=utf8";
mysql_query($cs1) or die('Error query: ' . mysql_error());
$cs2 = "SET character_set_client = utf8";
mysql_query($cs2) or die('Error query: ' . mysql_error());
$cs3 = "SET character_set_connection = utf8";
mysql_query($cs3) or die('Error query: ' . mysql_error());
if (!$c) {
	echo "<h3>ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
	exit();
}
else
{
	//echo 'connect success';
}
mysql_select_db($dbname);
?>

