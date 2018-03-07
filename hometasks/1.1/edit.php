<?php

//error_reporting(-1);
	$list = scandir('data');
	$fname = $_GET['fname'];
	$msg = "";

	if(!file_exists("data/$fname")){
		echo $msg = "Unknown $fname file!";die;
	}

	$files = file("data/$fname");

	if(count($_POST) > 0){
		$title = $_POST['title'];
		$content = htmlspecialchars($_POST['content']);
		
		if($title == '' || $content == ''){
			$msg = 'Заполните все поля';
		}
		elseif( ctype_digit($title) ){
			$msg = 'В полі повинні буди літери!';
		}
		else{
			//сохранить статью в файл
			fopen("data/$title", 'w') or die('Cannot open file:  '.$title);
			file_put_contents("data/$title", $content);
			if($title !== $fname){
				unlink("data/$fname");
			}
			//
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
	<input type="text" name="title" value="<?= $fname; ?>"><br>
	Контент<br>
	<textarea name="content" rows=20 cols=40>
		<?php 
			foreach ($files as $file) {
				echo htmlspecialchars($file);
			}
		?>
	</textarea><br>
	<input type="submit" value="Edit">
</form>

<?php echo $msg; ?>
	

