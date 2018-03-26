<?php foreach ($articles as $article) { ?>
	<div class="msg">
		<em><?= $article['dt'] ?></em>
		<strong><?=$article['name'] ?></strong>
		<div><?=$article['text'] ?></div>
		<p>(<a href="./controllers/edit.php?article_id=<?= $article['article_id']?>" class="link">moderate message</a>) (<a href="./controllers/delete.php?article_id=<?= $article['article_id']?>" class="remove">delete</a>)</p>
		
	</div>
<?php } ?>
<a href="controllers/add.php" id="add">Add new article</a>