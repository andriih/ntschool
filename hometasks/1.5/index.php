<?php 
	include_once 'functions.php';
?>
<!DOCTYPE html>
<?php 
	session_start();
	if($_SESSION['is_auth']){
		echo "<p>You login as Admin (<a href=\"logout.php\" class=\"link\">Logout</a>)</p>";
	}
 ?>
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
