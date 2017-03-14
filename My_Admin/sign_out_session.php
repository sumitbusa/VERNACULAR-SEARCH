<?php
	session_start();
	//clear all user data session like user_name and password 
	session_destroy();
	header('Location: index.php');
?>