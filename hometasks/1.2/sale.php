<?php
 
$now = time();

if(!isset($_COOKIE['first'])){
    setcookie('first',$now,time() + 3600 * 24 *7,'/');
}else{
    $now = $_COOKIE['first'];
}
echo $now;
