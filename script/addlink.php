<?php
	include 'connect.php';
	$data=file("list-domain.txt"); 
	$tb='web2';
	for($i=0;$i<count($data);$i++)
	{
		$dt=array('url'=>trim($data[$i]),'status'=>0);
		if($db->insert($tb,$dt))
		{
			echo 'insert url '.$data[$i].'success<br>';
		}
	} 
?> 
