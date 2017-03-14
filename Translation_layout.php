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
	<link rel="stylesheet" href="css/translateffects.css">
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
				<div id="Available">
					<img src="Images/verification.jpg">
			<div id="meaningpart">			
					<input type="text" name="English_meaning1" id="inputeffect" value="<?php echo $row["English_meaning1"];?>"/>
					<input type="submit" name="submit" id="submiteffect" value="Meaning1"/><br>
				<?php
							}
						if($row["English_meaning2"]!=null)
							{
				?>
					<input type="text" name="English_meaning2" id="inputeffect" value="<?php echo $row["English_meaning2"];?>"/>
					<input type="submit" name="submit" id="submiteffect" value="Meaning2"/><br>
				<?php
							}
						if($row["English_meaning3"]!=null)
							{
				?>
					<input type="text" name="English_meaning2" id="inputeffect" value="<?php echo $row["English_meaning3"];?>"/>
					<input type="submit" name="submit" id="submiteffect" value="Meaning3"/><br><br>
			
			<a href="step_2.php"><input type="submit" name="submit"  id="submiteffect" value="Back" /></a>/*i want to display these two buttons but i think k php code nu kai problem ave che!*/
			<a href="searchpage.php"><input type="submit" name="submit" id="submiteffect" value="Proceed To Search Page.."/></a>
			</div>
		<?php
							}
				}
	}

	else	
	{
?>
</div>
<div id="Unavailable" >
	<font color="red">
	<?php
		echo "*Sorry ! No Meaning is available ";
	?>
	</font>
	<font color="green">
	<?php
		echo "<br> If you know Meaning of this word Please Give Suggestion  on Suggestion page. <br><br>";
		
	?>
	
	<a href="suggestionpage.php" id="submiteffect"  style="color:#000" >Go to Suggestion Page</a>
	</font>
<?php
	}
?>
</div>
	
			</form>
		</center>
		 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>