<?php
session_start();

if(isset($_SESSION['is_auth'])){
    unset($_SESSION['is_auth']);
}

if(count($_POST) > 0){
    $_SESSION['name'] = $_POST['name'];
    
    if($_POST['login'] == 'admin' && $_POST['password'] = 'qwerty')
    {
       $_SESSION['is_auth'] = true;
       
       if(isset($_POST['remember'])){
       	setcookie('login', hash('sha256','admin'), time() + 3600 * 24 * 7,'/');
       	setcookie('login', hash('sha256','qwerty'), time() + 3600 * 24 * 7,'/');
       }

       header('Location: main.php'); 
       exit;
    }
    
}

?>
<form method="post" >
	Name:</br>
    <input type="text" name="login"><br>
    Password:</br>
    <input type="text" name="password"><br>
    <input type="checkbox" name="remember">Remember me</br>
    <input type="submit" value="Add"> 
</form>
