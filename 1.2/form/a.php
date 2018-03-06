<?php
	
	session_start();
	if(count($_POST) > 0){
		$_SESSION['name'] = $_POST['name'];
		header('Location: b.php');
		exit();
	}
	
?>
<form method="post">
	<p>Name</p>
	<input type="text" name="name"></br>
	<p>Password</p>
	<input type="password" name="password"></br>
	<p><input type="submit" value="Добавить"></p>
</form>
