<?php
	session_start();
    if(count($_POST) > 0){
        if($_POST['login'] == 'admin' && $_POST['password'] == "admin"){
            
            $_SESSION['is_auth'] = true;
            $_SESSION['login'] = $_POST['login'];

            if(isset($_POST['remember'])){
                setcookie('login', hash('sha256','admin'), time() + 3600 * 24 * 7,'/');
                setcookie('login', hash('sha256','admin'), time() + 3600 * 24 * 7,'/');
            }

            header('Location: ../index.php');
            exit;
        }elseif($_POST['login'] == '' || $_POST['password'] == ""){
            $msg = "Login or Password cant be blank...";
        }
        else{
            $msg = "Wrong Login or Password";
        }
    }else{
        $msg = "";
    }

    include '../views/v_login.php';

