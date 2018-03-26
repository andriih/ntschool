<?php
//error_reporting(-1);
include '../models/db.php';
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
        header('Location: ../index.php');
        exit;
    }
}
else{
    $msg = '';
}

?>

<?php include '../views/v_add.php'; ?>
   