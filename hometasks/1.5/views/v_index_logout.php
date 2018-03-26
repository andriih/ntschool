<?php foreach ($articles as $article) { ?>
	<div class="msg">
		<em><?= $article['dt'] ?></em>
		<strong><?=$article['name'] ?></strong>
		<div><?=$article['text'] ?></div>
	</div>
<?php } ?>
<a href="controllers/add.php" id="add">Add new article</a>