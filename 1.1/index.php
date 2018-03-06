<?php 
	$info = [];
	
	$info[] = date('Y-m-d H:i:s');
	$info[] = $_SERVER['REMOTE_ADDR'];
	$info[] = $_SERVER['HTTP_USER_AGENT'];
	$str = implode('@-@',$info);
	
	//echo $str;
		file_put_contents('log.txt',$str."\n",FILE_APPEND);
	//$f = fopen('log.txt','a');
	
	//fwrite($f,$str."\n");
	
	//fclose($f);	
?>
