<?php
include 'connect.php';
$sql='select * from loglink where 1 order by id desc';
$re=mysql_query($sql);
while($v=mysql_fetch_array($re))
{
	echo $v[url].'<br>';
}
?>