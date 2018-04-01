<?php

    include_once ('models/db.php');
    include_once ('models/system.php');

    $db = db_connect();

if(count($_POST) > 0){
        $name = trim($_POST['name']);
        $text = trim($_POST['text']);

        if($name == '' || $text == ''){
            $msg = 'Fill all fields';
        }else{
            db_query("INSERT INTO messages (name, text) VALUES (:n , :t)",[
                'n' => $name,
                't' => $text
            ]);

           header('Location: index.php');
           exit;

        }
 
    }else{
        $name = '';
        $text = '';
        $msg = '';
    }
    
    template ('v_add',[
       'name' => $name,
        'text' => $text,
        'msg' => $msg
    ]);


