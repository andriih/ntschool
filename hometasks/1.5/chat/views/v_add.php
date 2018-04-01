<form method="post">
    Имя<br>
    <input type="text" name="name" value="<?php echo $vars['name'];?>"><br>
    Комментарий<br>
    <textarea name="text"><?php echo $vars['text'];?></textarea><br>
    <input type="submit" value="Отправить">
</form>
<?php echo $vars['msg'];?>