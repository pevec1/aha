<?php
ini_set('session.use_cookies',1);
ini_set('session.use_only_cookies',1);
	session_start();
//require_once "config_local.php";
if($_POST['out']==true){
			unset($_SESSION['login']);
 	unset($_SESSION['password']);	
	echo 'Вы вышли';
} else {
	echo "error";
}
?>