<?php 
	include_once 'functions.php';
	$article_id =  $_GET['article_id'];
	//echo $fname;
	 db_query("DELETE FROM articles WHERE article_id = '$article_id' ");
	 header('Location: index.php');
	 exit;
?>