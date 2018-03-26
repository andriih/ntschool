<?php
//error_reporting(-1);
include_once 'functions.php';
if(count($_POST) > 0){

    $title = trim($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $article = db_query("SELECT name FROM articles WHERE name = '$title'")->fetchAll();
    $name = $article[0];

    if($title == '' || $content == ''){
        $msg = 'Заполните все поля';
    }
    elseif( ctype_digit($title) ){
        $msg = 'В полі повинні буди літери!';
    }
    elseif( $name[0] === $title ){
        $msg = "Файл $title вже існує.";
    }
    else{
        //сохранить статью в файл
        db_query("INSERT INTO articles (name, text) VALUES (:t, :c)",[
                't' => $title,
                'c' => $content
        ]);
        header('Location: index.php');
        exit;
    }
}
else{
    $msg = '';
}

?>
    <h1>Add Page</h1>

    <form method="post">
        Name<br>
        <input type="text" name="title" value="<?= $_POST['title']; ?>"><br>
        Content<br>
        <textarea name="content"><?= $_POST['content']; ?></textarea><br>
        <input type="submit" value="Add article">
    </form>
<?php echo $msg; ?>