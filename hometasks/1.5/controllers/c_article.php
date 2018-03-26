<?php 
	include 'articles.php';

	$id = $_POST['id_art'];

	$article = fetch_one_article($id);

	include '../views/single_article.php';