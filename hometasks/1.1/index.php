<?php
	//error_reporting(-1);
	session_start();

	if(!$_SESSION['is_auth']){
        echo "<a href=\"auth/login.php\">Зайти</a>";

        $list = scandir('data');

        foreach($list as $fname){
            if(is_file("data/$fname")){
                echo "<p><a href=\"post.php?fname=$fname\">$fname</a><br></p>";
            }
        }

	}else{
        $name = $_POST['login'];
        echo "You authorized as $name "."<a href=\"auth/exit.php\">Вийти</a>";

        $list = scandir('data');

        foreach($list as $fname){
            if(is_file("data/$fname")){
                echo "<p><a href=\"post.php?fname=$fname\">$fname</a><br>"." (<a href=\"edit.php?fname=$fname\">Редагувати</a>)</p>";
            }
        }

        echo "<a href=\"add.php\">Добавить</a>";

    }



?>




