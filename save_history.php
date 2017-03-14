<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');	//For Gujarati 
	$_SESSION["search_value"]=NULL;
	
	header('Content-Type: text/html; charset=utf-8');
	if($_POST["submit"] == "Meaning1")
	{
		$_SESSION["search_value"] = $_POST["English_meaning1"];
		//echo $_SESSION["search_value"];
	}
	else if($_POST["submit"] == "Meaning2")
	{
		$_SESSION["search_value"] = $_POST["English_meaning2"];
		//echo $_SESSION["search_value"];
	}
	else if($_POST["submit"] == "Meaning3")
	{
		$_SESSION["search_value"] = $_POST["English_meaning3"];
		//echo $_SESSION["search_value"];
	}
	//echo $_SESSION["values"];
	
	if(isset($_SESSION["values"]))
		{
			$Word = $_SESSION["values"];
			$Pc_ip = GetHostByName($REMOTE_ADDR);
			//echo "Pc IP : ",$Pc_name,"<BR>";
			$Pc_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			//echo "Pc Name : ",$Pc_ip,"<BR>";
			date_default_timezone_set("Asia/Kolkata");
			$Time = date("h:i:sa");
			$date = date("Y.m.d");
			//echo "The time is " . $Time."<br>";
			
			$table_name = $_SESSION["User_name"];
			include 'connection_php.php';
			//echo $table_name;
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$query="insert into $table_name values('$Word','$Pc_name','$Pc_ip','$date','$Time')";
				if(mysql_query($query))
					{
						//echo "data saved";
						$_SESSION["Eng_input_for_api"]=null;
						header('Location: search_session.php');
					}
				else
					{
						echo "data is not saved ".mysql_error();
						$_SESSION["Register_Error"]=1;
						header('Location: Registration updated.php');
					}
		}
?>