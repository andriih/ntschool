<?php 
	include_once '../models/db.php';
	$article_id =  $_GET['article_id'];
	//echo $fname;
	 db_query("DELETE FROM articles WHERE article_id = '$article_id' ");
	 header('Location: ../index.php');
	 exit;
?>