<?php 
	
	session_start();
	
	if(!(isset($_SESSION['is_auth']) && $_SESSION['is_auth'])){
		
		if(isset($_COOKIE['login']) && isset($_COOKIE['password']))
		{
			if($_COOKIE['login'] == 'admin' && 
				$_COOKIE['password'] == hash('sha256','qwerty'))
			{
				
			}
		}
		header('Location: login.php');
		exit;
	}

	// echo md5('qwerty').'<br>';
	// echo md5('qwerty').'<br>';
	// echo hash('sha256','qwerty').'<br>';

	function myhash($str){
		return hash('sha256',$str . '843htongf');
	}

?>
  
Secret content
<a href="login.php">Exit</a></br>