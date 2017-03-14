<?php
	session_start();
	$_SESSION["value"]=NULL;
	header('Content-Type: text/html; charset=utf-8');	//For Gujarati 
	if($_POST["submit"] == "Search Keyword")
	{
		$_SESSION["value"] = $_POST["Gu_input"];
		//echo $_POST["Gu_input"];
	}
	else if($_POST["submit"] == "Search Keyword_1")
	{
		$_SESSION["value"] = $_POST["Gu_input_2"];
		//echo $_SESSION["value"];
	}
	//header('Location: session.php')

	$Gujarati_word = $_SESSION["value"];	//Get the Gujarati value
	//echo $Gujarati_word;
	
	/*if($_SESSION["value"] == null)		//If user not type any word so 
		header('Location : step_1.php')*/
?>
<html>
	<head>
	</head>
	<body>
		<center>
			<form method="post" action="save_history.php">
<?php
	include 'connection_php.php';	//This is use for connect mySQL 
	
	$database = "Translator";	//select Database
	mysql_select_db($database,$connection);	//connect with database
	mysql_query("set names utf8");	//use Gujarati keyword
	$sql= "select English_meaning1,English_meaning2,English_meaning3 from keyword_meaning where Gujarati_input = '$Gujarati_word' LIMIT 1";	//SQL Query
	$result= mysql_query($sql);
	$num= mysql_num_rows($result);
	if($num != 0)
	{
	//echo "<br>".$num."<br>";
			while($row=mysql_fetch_array($result))
				{
						if($row["English_meaning1"]!=null)
							{
				?>
					<input type="text" name="English_meaning1" value="<?php echo $row["English_meaning1"];?>"/>
					<?php $_SESSION["meaning"] = $row["English_meaning1"];?>
					<input type="submit" name="submit" value="English_meaning1"/><br>
				<?php
							}
						if($row["English_meaning2"]!=null)
							{
				?>
					<input type="text" name="English_meaning2" value="<?php echo $row["English_meaning2"];?>"/>
					<?php $_SESSION["meaning"] = $row["English_meaning1"];?>
					<input type="submit" name="submit" value="English_meaning2"/><br>
				<?php
							}
						if($row["English_meaning3"]!=null)
							{
				?>
					<input type="text" name="English_meaning2" value="<?php echo $row["English_meaning3"];?>"/>
					<?php $_SESSION["meaning"] = $row["English_meaning1"];?>
					<input type="submit" name="submit" value="English_meaning3"/><br>
		<?php
							}
				}
	}

	else	
	{
?>
	<font color="red">
	<?php
		echo "*Sorry ! No Meaning is available ";
	?>
	</font>
	<font color="green">
	<?php
		echo "<br> If you know Meaning of this word Please Give Suggestion for this word. ";
	?>
	</font>
<?php
	}
?>
	
			</form>
					<a href="suggestionpage.php">Any suggestion ??</a>
		</center>
	 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>