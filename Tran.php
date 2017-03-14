<?php
	session_start();
	$_SESSION["Eng_input_for_api"]=null;
	$_SESSION["Eng_input_for_api"]=$_POST["Eng_input"];
	$_SESSION["Eng_input_for_api_pass_Translator"]=$_POST["Eng_input"];
//	echo $_SESSION["Eng_input_for_api"];
//	echo $_SESSION["Eng_input_for_api_pass_Translator"];
	header('Location: Translator.php')
?>