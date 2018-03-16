<?php
$db = new PDO('mysql:host=localhost;dbname=blog','root','');
$db->exec('SET NAMES UTF8');

if(count($_POST) > 0){
    $name = trim($_POST['name']);
    $text = trim($_POST['text']);

    if($name == '' || $text == ''){
        $msg = 'Fiel all fields';
    }else{
        $sql = "INSERT INTO messages (name, text) VALUES (:n , :t)";

        $query = $db->prepare($sql);

        $query->execute([
            'n' => $name,
            't' => $text
        ]);

        $info = $query->errorInfo();

        if($info[0] != PDO::ERR_NONE){
            exit($info[2]);
        }


        header('Location: index.php');
        exit;

    }

}else{
    $name = '';
    $text = '';
    $msg = '';
}
?>

<?php foreach($messeges as $message) { ?>
    <div>
        <em><?= $message['dt']; ?></em>
        <strong><?= $message['name']; ?></strong>
        <div><?= $message['text']; ?></div>
    </div>
<?php } ?>

<a href="add.php">Add</a>
