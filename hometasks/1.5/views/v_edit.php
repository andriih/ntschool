<?php foreach ($article as $article_item) { ?>
	<h1>Edit Page</h1>
	<p>(<a href="index.php" class="link">Blog</a>)</p>
	<form method="post">
		Name<br>
		<input type="text" name="title" value="<?= $article_item['name']; ?>"><br>
		Content<br>
		<textarea name="content"><?= $article_item['text']; ?></textarea><br>
		<input type="submit" value="Edit article">
	</form>
<?php } ?>
<?php echo $msg; ?>