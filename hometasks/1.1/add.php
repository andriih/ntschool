<?php
	//error_reporting(-1);
	
	if(count($_POST) > 0){
		
		$title = trim($_POST['title']);
		$content = htmlspecialchars($_POST['content']);
		
		if($title == '' || $content == ''){
			$msg = 'Заполните все поля';
		}
		elseif( ctype_digit($title) ){
			$msg = 'В полі повинні буди літери!';
		}
		elseif( file_exists("data/$title") ){
			$msg = "Файл $title вже існує.";
		}
		else{
			//сохранить статью в файл
			fopen("data/$title", 'w') or die('Cannot open file:  '.$title);
			file_put_contents("data/$title",$content);
			header("Location: index.php");
			exit();
		}
	}
	else{
		$msg = '';
	}
	
?>
<form method="post">
	Название<br>
	<input type="text" name="title" value="<?= $_POST['title']; ?>"><br>
	Контент<br>
	<textarea name="content"><?= $_POST['content']; ?></textarea><br>
	<input type="submit" value="Добавить">
</form>
<?php echo $msg; ?>