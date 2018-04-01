<a href="index.php?view=inline">Отобразить в линию</a>
<div>
<? foreach($messages as $message) : ?>
    <div>
        <em><?=$message['dt']?></em> 
        <strong><?=$message['name']?></strong>
        <div><?=$message['text']?></div>
        <a href="message.php?id=<?=$message['id_message']?>"><?=$message['text']?></a>
    </div>
    <hr>
<? endforeach; ?>
</div>
<a href="add.php">Добавить</a>