<?php

    include_once ('functions.php');

    $db = db_connect();

if(count($_POST) > 0){
        $name = trim($_POST['name']);
        $text = trim($_POST['text']);

        if($name == '' || $text == ''){
            $msg = 'Fiel all fields';
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
?>

<form method="post">
    Name:<br>
    <input type="text" name="name" value="<?php echo $name; ?>"><br>
    <textarea name="text" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Send"><br>

</form>

<?= $msg; ?>
