<?php

include_once 'models/messages.php';
include_once 'models/system.php';

$id = $_GET['id'] ?? null;
$err404 = false;

if($id === null || id==='')
{
    $err404 = true;
}else{  
    $message = messages_one($id);
    if ($message === false){
        $err404 = true;
    }
}

template('v_message', [
    'err404' => $err404,
    'message' => $message
]);

