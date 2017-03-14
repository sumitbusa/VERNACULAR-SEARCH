<?php
	if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
	$en_data;
	$database="Translator";
	$connection=mysql_connect("localhost:3306","root","28485855Busa");
	if(!$connection)
		{
			die('could not connect'.mysql_error());
		}
	//echo "successfully connected : ";
?>