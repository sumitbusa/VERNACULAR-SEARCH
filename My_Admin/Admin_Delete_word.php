<?php
	session_start();
	if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
	header('Content-Type: text/html; charset=utf-8');
	$_SESSION["Selected_Error"]=null;
			if(!empty($_POST['check_box'])) 
				{
					$checked_count = count($_POST['check_box']);
					//	echo $checked_count;
					//	echo "You have selected following ".$checked_count." option(s): <br/>";
						foreach($_POST['check_box'] as $selected) 
							{
					//			echo "<p>".$selected ."</p>";
								$word=$selected;
								//echo $word;
								$database="Translator";
									include 'connection_php.php';
	
									mysql_select_db($database,$connection);
									mysql_query("set names utf8");
									$sql = "DELETE FROM keyword_meaning WHERE Gujarati_input ='$word'";
									mysql_query($sql);
									$_SESSION["Selected_Error"] = 0;
								
								//	echo $value;
								//	mysql_query($sql);
									//$num = mysql_num_rows($result);

									//$num = mysql_num_rows($result);
							}
				}
			else
				{
						$_SESSION["Selected_Error"]=1;
				}
			header('Location: Admin_Dictionary_data.php');
?>