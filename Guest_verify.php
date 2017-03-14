<?php
	session_start();
		if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Guest"] != 1)
					header('Location: Home_page.php');
		}
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
	if(isset($_SESSION["value"]))
		{
			$_SESSION["Guest_value"] = 0;

			include 'connection_php.php';
			$Word = $_SESSION["value"];
				//echo $value."<br>";
					$Pc_ip = GetHostByName($REMOTE_ADDR);
				//echo "Pc IP : ",$Pc_name,"<BR>";
					$Pc_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
				//echo "Pc Name : ",$Pc_ip,"<BR>";
				date_default_timezone_set("Asia/Kolkata");
				$Time = date("h:i:sa");
				$date = date("Y.m.d");
			//echo "The time is " . $Time."<br>";
			
			$tables = array();
			$list_tables_sql = "SHOW TABLES FROM {$database};";  
			$result = mysql_query($list_tables_sql);
	
			$count = 0;
			if($result)
				{
					$num=mysql_num_rows($result);
					//echo $num;
					while($table = mysql_fetch_row($result))
						{
							$tables[] = $table[0];
							if($table[0] == $Pc_ip)
								{
									$count = 1;
								}
						}
				}
			else
				{
					//echo "Table is not in Database : ";
				}
				
				//echo "<br>";
				if($count != 1)
					{
							//echo "Table is not found : ";
							mysql_select_db($database,$connection);
								$sql="CREATE TABLE IF NOT EXISTS `$Pc_ip` (
									`word` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
									`date` DATE NOT NULL ,
									`Time` TIME NOT NULL ,
									`Pc_name` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
								) ENGINE = MYISAM ";

						if(mysql_query($sql))
							{
								//echo "Table created successful : ";
							//header('Location: index.php');
							}
						else
							{
								echo "Table is Not created : ";
							}
					}
				if($count == 1)
					{
						//echo "Table is available";
						include 'connection_php.php';
						//echo $Pc_ip;
				
						mysql_select_db($database,$connection);
		
							mysql_query("set names utf8");
										$sql = "SELECT * FROM `$Pc_ip`";
										$result= mysql_query($sql);
										$num = mysql_num_rows($result);
										//echo "<br>".$num;
								if($num >= 3)
									{
										$_SESSION["Guest_value"] = 1;										
									}
								else
									{
										//echo $table_name;
											include 'connection_php.php';
											mysql_select_db($database,$connection);
											mysql_query("set names utf8");
										$query="INSERT INTO `Translator`.`$Pc_ip` (`word`, `date`, `Time`, `Pc_name`) VALUES ('$Word', '$date', '$Time', '$Pc_name')";
											if(mysql_query($query))
												{
													//echo "data saved";
													$_SESSION["Eng_input_for_api"]=null;
													header('Location: Exit_a_Guest_option.php');
												}
											else
												{
													//echo "data is not saved ".mysql_error();
													$_SESSION["Register_Error"]=1;
												//	header('Location: Guest_new_2.php');
												}
									}
							header('Location: Guest_new_5.php');
					}
		}
?>