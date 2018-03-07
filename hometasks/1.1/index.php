
<?php
	//error_reporting(-1);
	
	$list = scandir('data');
	
	foreach($list as $fname){
		if(is_file("data/$fname")){
			echo "<p><a href=\"post.php?fname=$fname\">$fname</a><br>"." (<a href=\"edit.php?fname=$fname\">Редагувати</a>)</p>";
		}
	}
	
?>
<a href="add.php">Добавить</a>


