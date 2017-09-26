<?php
$data=file_get_contents('http://www.postfree.work/member/data_for_list2.php?cate_id='.$_GET[cate_id]);
echo $data;
?>
