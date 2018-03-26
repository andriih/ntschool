<?php
include_once '../models/db.php';
$article_id =  $_GET['article_id'];	
$query = db_query("SELECT * FROM articles WHERE article_id = '$article_id' ");
$article = $query->fetchAll();

	if( $article[0] === null ){
		header('Location: views/404.php');
		exit;
	}

	if(count($_POST) > 0){
		$title = $_POST['title'];
		$content = htmlspecialchars($_POST['content']);
		
		if($title == '' || $content == ''){
			$msg = 'Заполните все поля';
		}
		elseif( ctype_digit($title) ){
			$msg = 'В полі повинні буди літери!';
		}
		else{
			//сохранить статью в файл
			db_query("INSERT INTO articles (name, text) VALUES (:t, :c)",[
                't' => $title,
                'c' => $content
        	]);
			
			db_query("DELETE FROM articles WHERE article_id = '$article_id'");

	        header('Location:../index.php');
	        exit;
		}
	}
	else{
		$msg = '';
	}
	
	include '../views/v_edit.php';
?>