<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
<?php
$text = file('keyword.txt');
echo "<textarea name='title' id='title' cols='200' rows='20'>";
echo "{";
foreach($text as $value)
{
echo trim($value).'|';
}
echo "}";
echo "</textarea>";
?>
<br /><br />
อย่าลืมลบ | อันสุดท้ายออก