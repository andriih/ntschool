<?php
	
	session_start();

	if(isset($_SESSION['is_auth'])){
		unset($_SESSION['is_auth']);
	}
	
	if(count($_POST) > 0){
		
		if($_POST['login'] == 'admin' && $_POST['password'] == 'qwerty' ){
			
			$_SESSION['is_auth'] = true;

			if(isset($_POST['remember'])){
				setcookie('login',hash('sha256','admin'),)
			}

			header('Location: main.php');
			exit();
		}
		

		// $_SESSION['name'] = $_POST['name'];
		
	}
	
?>
<form method="post">
	<p>Name</p>
	<input type="text" name="login"></br>
	<p>Password</p>
	<input type="password" name="password"></br>
	<p>Remember me</p>
	<input type="password" name="remember"></br>

	<p><input type="submit" value="Добавить"></p>
</form>
