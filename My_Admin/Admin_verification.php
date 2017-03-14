<?php
	session_start();
		
		if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
	
		$_SESSION["Admin_Email"]=null;
		$_SESSION["password"]=null;
		$_SESSION["Error"]=null;
		$_SESSION["Admin_staus"] = null;

		include 'connection_php.php';
		mysql_select_db($database,$connection);
		$user_name=$_POST["uname"];
		$password = $_POST["pwd"];
		$sql= "select * from admin_table where Admin_Email = '$user_name' and Password = '$password' LIMIT 1";
		$result= mysql_query($sql);
		$row=mysql_fetch_array($result);
		$value=$row[0];

			if($value == True)
				{
					$_SESSION["Admin_staus"] = 'Admin';
					$_SESSION["User_name"]=$user_name;
					$_SESSION["password"]=$password;
					$_SESSION["Error"]=0;
					//echo $_SESSION["Login_Status"];
					//echo "user name is Found : ";
						//if($_SESSION["Login_Status"]==Admin)
							header('Location: Adim_user_data.php');
				}
			else
				{
					$_SESSION["User_name"]=null;
					$_SESSION["password"]=null;
					$_SESSION["Error"]=1;
					#echo "user name is Not Found : ";
					header('Location: index.php');
				}

?>