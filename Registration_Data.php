<?php
	session_start();
	
	header('Content-Type: text/html; charset=utf-8');
	
	include 'connection_php.php';
	
	$database="Translator";
	$F_name = $_POST["F_name"];
	$L_name = $_POST["L_name"];
	$User_id = $_POST["User_id"];
	$pass1 = $_POST["pass1"];
	$date = $_POST["date"];
	$month = $_POST["month"];
	$year = $_POST["year"];
	$gender=$_POST["gender"];
	$_SESSION["user_name"] = $User_id;
	/*

	echo "<br>".$F_name;
	echo "<br>".$L_name;
	echo "<br>".$User_id;
	echo "<br>".$pass1;
	echo "<br>".$date;
	echo "<br>".$month;
	echo "<br>".$year;*/
	
	$DOB=$date.$month.$year;
	$status="user";
	mysql_select_db($database,$connection);
	mysql_query("set names utf8");
	$query="insert into Registration_table values('$F_name','$L_name','$User_id','$pass1','$gender','$DOB','$status')";
		if(mysql_query($query))
		{
				//echo "data saved";
			//	header('Location: index.php');
		}
		else
		{
			$_SESSION["Register_Error"]=1;
			header('Location: Registration updated.php');
		}
		
	$query_1="insert into login_database values('$User_id','$pass1','$status')";
		if(mysql_query($query_1))
		{
			//	echo "data saved in login_table";
			header('Location: table_history.php');
		}
		else
		{
			$_SESSION["Register_Error"]=1;
			header('Location: Registration updated.php');
		}
	mysql_close();
	
?>
