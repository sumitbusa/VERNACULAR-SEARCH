<?php
	session_start();
	if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
	$_SESSION["Selected_Error"]=null;

	//echo $_POST['check_box'];
			if(!empty($_POST['check_box'])) 
				{
					$checked_count = count($_POST['check_box']);
					//	echo $checked_count;
					//	echo "You have selected following ".$checked_count." option(s): <br/>";
						foreach($_POST['check_box'] as $selected) 
							{
					//			echo "<p>".$selected ."</p>";
								$user_name=$selected;
								//echo $user_name;
								$database="Translator";
									include 'connection_php.php';
	
									mysql_select_db($database,$connection);
	
									$sql = "DELETE FROM login_database WHERE user_name='$user_name'";
									$sql_1 = "DELETE FROM registration_table WHERE user_name='$user_name'";
									mysql_query($sql);
									//$num = mysql_num_rows($result);
									mysql_query($sql_1);
									
									include 'connection_php.php';
									$database="client history";
									mysql_select_db($database,$connection);
									$sql_2 = "DROP TABLE '$user_name'";
									mysql_query($sql_2);
									
									//$num = mysql_num_rows($result);
									$_SESSION["Selected_Error"] = 0;
							}
				}
			else
				{
						$_SESSION["Selected_Error"]=1;
						//echo $_SESSION["Selected_Error"];
				}
			header('Location: Admin_page.php');
?>