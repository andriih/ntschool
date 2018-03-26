<?php 
	include_once 'functions.php';
	
	session_start();
	$name = $_SESSION['login'];
	
	if($_SESSION['is_auth'] === true){
		echo "<p>You login as $name (<a href=\"logout.php\" class=\"link\">Logout</a>)</p>";
	}else{
		echo "<p>Wellcome, stranger! (<a href=\"login.php\" class=\"link\">Login</a>)</p>";
	}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
   $query = db_query('SELECT * FROM articles ORDER BY dt DESC');

   $articles = $query->fetchAll();

   //var_dump($articles);
?>

<?php foreach ($articles as $article) { ?>
	<div class="msg">
		<em><?= $article['dt'] ?></em>
		<strong><?=$article['name'] ?></strong>
		<div><?=$article['text'] ?></div>
		<p>(<a href="edit.php?article_id=<?= $article['article_id']?>" class="link">moderate message</a>) (<a href="delete.php?article_id=<?= $article['article_id']?>" class="remove">delete</a>)</p>
		
	</div>
<?php } ?>
<a href="add.php" id="add">Add new article</a>
</body>
</html>
