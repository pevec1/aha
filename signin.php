<?php
ini_set('session.use_cookies',1);
ini_set('session.use_only_cookies',1);
session_start();
//require_once "config_local.php";
	if ($_POST["login"]=="user"&&$_POST["password"]=="password") {
		$_SESSION['login']=$_POST["login"];
 		$_SESSION['password']=$_POST["password"];
		echo 'Данные приняты';
	} else {
		echo 'Данные не приняты';
	}
?>