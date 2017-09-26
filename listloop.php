<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
<?php
$text = file('listloop.txt');
echo "<textarea name='title' id='title' cols='200' rows='20'>";
//echo "{";
foreach($text as $value)
{
echo "URL GOTO=".trim($value)."/wp-admin/admin-ajax.php?action=auto_news_plugin_addpost";
echo '
';
echo "\r\n";
echo "\r\n";
}
//echo "}";
echo "</textarea>";
?>
<br /><br />

