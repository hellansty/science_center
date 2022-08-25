<?php
	session_name("log");
	session_start();
	session_unset();
	// Удалить сессионную переменную
	unset($_SESSION['login']);
	session_destroy();
	include("authform.php");
?>
