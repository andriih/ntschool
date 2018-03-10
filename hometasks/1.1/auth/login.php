<?php
    session_start();

    if($_POST['login'] == 'admin' && $_POST['password'] == "qwerty"){
        $_SESSION['is_auth'] = true;

        header('Location: index.php');
        exit;
    }
    ?>

<form method="post">
    Name: <br>
    <input type="text" name="login"><br>
    Password: <br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>