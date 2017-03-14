<?php
	session_start();
	


		$_SESSION["Login_Status"]=null;
		$_SESSION["User_name"]=null;
		$_SESSION["password"]=null;
		$_SESSION["Error"]=null;


		include 'connection_php.php';
		mysql_select_db($database,$connection);
		$user_name=$_POST["uname"];
		$password = $_POST["pwd"];
		$sql= "select status from Login_Database where user_name = '$user_name' and password = '$password' LIMIT 1";
		$result= mysql_query($sql);
		$row=mysql_fetch_array($result);
		$value=$row[0];

			if($value == True)
				{
					$_SESSION["Login_Status"]=$value;
					$_SESSION["User_name"]=$user_name;
					$_SESSION["password"]=$password;
					$_SESSION["Error"]=0;
					//echo $_SESSION["Login_Status"];
						if($_SESSION["Login_Status"]==Admin)
							header('Location: Admin_index.php');
				}
			else
				{
					$_SESSION["Login_Status"]=null;
					$_SESSION["User_name"]=null;
					$_SESSION["password"]=null;
					$_SESSION["Error"]=1;
				}
			header('Location: index.php')

?>