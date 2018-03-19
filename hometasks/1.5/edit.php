<?php
include_once 'functions.php';
$article_id =  $_GET['article_id'];	
$query = db_query("SELECT * FROM articles WHERE article_id = '$article_id' ");
$article = $query->fetchAll();

if( $article[0] === null ){
	header('Location:404.php');
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

        	db_query("DELETE FROM articles WHERE article_id = '$article_id' ");

        header('Location: index.php');
        exit;
		}
	}
	else{
		$msg = '';
	}

?>
<?php foreach ($article as $article_elem) { ?>
	<h1>Edit Page</h1>
	<p>(<a href="index.php" class="link">Blog</a>)</p>
	<form method="post">
		Name<br>
		<input type="text" name="title" value="<?= $article_elem['name']; ?>"><br>
		Content<br>
		<textarea name="content"><?= $article_elem['text']; ?></textarea><br>
		<input type="submit" value="Edit article">
	</form>
<?php } ?>
<?php echo $msg; ?>