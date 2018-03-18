<?php
   include_once 'functions.php';

    $query = db_query('SELECT * FROM articles ORDER BY dt DESC');

    $articles = $query->fetchAll();

    var_dump($articles);
?>


