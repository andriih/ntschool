<?php
        include_once ('functions.php');

        $query = db_query("SELECT * FROM messages ORDER BY dt DESC");

        $messages = $query->fetchAll();
       // var_dump($messages);

?>

<?php foreach($messages as $message) { ?>
    <div>
        <em><?= $message['dt']; ?></em>
        <strong><?= $message['name']; ?></strong>
        <div><?= $message['text']; ?></div>
    </div>
    <hr>
<?php } ?>

<a href="add.php">Add</a>
