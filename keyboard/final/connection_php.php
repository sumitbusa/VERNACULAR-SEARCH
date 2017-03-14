<?php
	$en_data;
	$database="Translator";
	$connection=mysql_connect("localhost:3306","root","");
	if(!$connection)
		{
			die('could not connect'.mysql_error());
		}
	//echo "successfully connected : ";
?>