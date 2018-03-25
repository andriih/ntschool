<?php



session_start();
//var_dump($_SESSION);

if(!(isset($_SESSION['is_auth']) && $_SESSION['is_auth'])){
    header('Location: login.php');
    exit;
}
echo myhash('qwerty1')."<br>";

function myhash($str){
    return hash('sha256',$str."842vsdvs");
}
?>

Secret

<a href="login.php" >Exit</a>