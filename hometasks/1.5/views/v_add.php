 <h1>Add Page</h1>
    <form method="post">
        Name<br>
        <input type="text" name="title" value="<?= $_POST['title']; ?>"><br>
        Content<br>
        <textarea name="content"><?= $_POST['content']; ?></textarea><br>
        <input type="submit" value="Add article">
    </form>
<?php echo $msg; ?>