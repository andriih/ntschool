<?php
    session_start();
    if(count($_POST) > 0){
        if($_POST['login'] == 'admin' && $_POST['password'] == "qwerty"){
            $_SESSION['is_auth'] = true;

            if(isset($_POST['remember'])){
                setcookie('login','admin',time() + 3600 * 24 * 7, '/');
            }

            header('Location: ../index.php');
            exit;
        }
        else{
            $msg = "Wrong Login or Password";
        }
    }else{
        $msg = "";
    }


    ?>

<form method="post">
    Name: <br>
    <input type="text" name="login"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="checkbox" name="remember">Remember me<br>
    <input type="submit" value="Submit">
</form>
<p><strong><?= $msg; ?></strong></p>