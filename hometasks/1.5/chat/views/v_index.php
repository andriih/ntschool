<a href="index.php?view=inline">Inline Layout</a>
<div>
	<?php foreach($messages as $message) { ?>
    <div>
        <em><?= $message['dt']; ?></em>
        <strong><?= $message['name']; ?></strong>
        <div><?= $message['text']; ?></div>
    </div>
    <hr>
<?php } ?>

<a href="add.php">Add</a>
</div>

