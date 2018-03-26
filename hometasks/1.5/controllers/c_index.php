<?php 
	include_once './models/db.php';
	include 'c_article.php';
	session_start();
	$name = $_SESSION['login'];
	
	if($_SESSION['is_auth'] === true){
		echo "<p>You login as $name (<a href=\"./controllers/logout.php\" class=\"link\">Logout</a>)</p>";
	}else{
		echo "<p>Wellcome, stranger! (<a href=\"./controllers/login.php\" class=\"link\">Login</a>)</p>";
	}
	
include './controllers/articles.php';
   
$articles = fetch_all_articles();

switch ($_SESSION['is_auth']) {
	
	case 'true':
		include './views/v_index_login.php';
		break;
	
	case 'false':
		include './views/v_index_logout.php';
		break;
	
	default:
		include './views/v_index_logout.php';
		break;

}

