<? if ($err404) { ?>
    404
<? }else{ ?>
    <div>
        <em><?= $message['dt']; ?></em>
        <strong><?= $message['name']; ?></strong>
        <a href="message.php?id=<?= $message['id_message'] ?>"><?= $message['text'] ?><a>
        <div><?= $message['text']; ?></div>
    </div>
<? } ?>