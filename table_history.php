<?php
	session_start();
	//This is page use for Create A dynamic Table (For Store User History) when user want to Register First Time
	$user_name = $_SESSION["user_name"];
	//$user_name = "Nisarg01shah";

	include 'connection_php.php';
	mysql_select_db($database,$connection);
	$sql="CREATE TABLE IF NOT EXISTS `$user_name` (
			`Word` varchar(50) CHARACTER SET utf8 NOT NULL,
			`Pc_name` varchar(50) CHARACTER SET utf8 NOT NULL,
			`Pc_ip` varchar(50) CHARACTER SET utf8 NOT NULL,
			`Time` time NOT NULL
			) ENGINE=MyISAM DEFAULT CHARSET=ucs2";
			if(mysql_query($sql))
				{
					//echo "Table created successful : ";
					header('Location: index.php');
				}
			else
				{
					echo "Table is Not created : ";
				}
?>