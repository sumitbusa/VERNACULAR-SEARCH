<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	$user_name = $_SESSION["User_name"];
	$available_word = $_SESSION["value"];
	$suggested_word = $_POST["suggestion_word"];
	$Pc_ip = GetHostByName($REMOTE_ADDR);
	//echo "Pc IP : ",$Pc_ip,"<BR>";
	$Pc_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	//echo "Pc Name : ",$Pc_ip,"<BR>";
	date_default_timezone_set("Asia/Kolkata");
	$Time = date("h:i:sa");
	$date = date("Y.m.d");
	if($suggested_word != null)
	{
	include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$query="insert into suggestion_table values('$user_name','$available_word','$suggested_word','$Pc_name','$Pc_ip','$date','$Time')";
				if(mysql_query($query))
					{
						//echo "data saved";
						/*$_SESSION["Eng_input_for_api"]=null;*/
						$_SESSION["value"] = null;
						header('Location: options.php');
					}
				else
					{
						//echo "data is not saved ".mysql_error();
						$_SESSION["Register_Error"]=1;
						//header('Location: Registration updated.php');
					}
	}
?>