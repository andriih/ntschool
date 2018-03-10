<a href="auth/login.php">Зайти</a>

<?php
	//error_reporting(-1);
	session_start();

	if(isset($_SESSION['is_auth'])){
        echo "Authorized!!!";
    }
	$list = scandir('data');
	
	foreach($list as $fname){
		if(is_file("data/$fname")){
			echo "<p><a href=\"post.php?fname=$fname\">$fname</a><br>"." (<a href=\"edit.php?fname=$fname\">Редагувати</a>)</p>";
		}
	}
	
?>
<a href="add.php">Добавить</a>



