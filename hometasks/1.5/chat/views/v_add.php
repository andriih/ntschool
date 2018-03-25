<form method="post">
    Имя<br>
    <input type="text" name="name" value="<?php echo $name;?>"><br>
    Комментарий<br>
    <textarea name="text"><?php echo $text;?></textarea><br>
    <input type="submit" value="Отправить">
</form>
<?php echo $msg;?>