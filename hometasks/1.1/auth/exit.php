<?php

session_start();
if(isset($_SESSION['is_auth'])){

    $_SESSION['is_auth'] = false;
    setcookie('login','admin',time() - 1, '/');
    header('Location: ../index.php');
    exit;
}else{
    header('Location: ../index.php');
    exit;
}
