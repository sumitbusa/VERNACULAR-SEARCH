<?php
	session_start();
		if(!isset($_SESSION["Login_Status"]))
			{
				if($_SESSION["Guest"] != 1)
					header('Location: index.php');
			}
				if(isset($_SESSION["Guest_value"]))
					{
						if($_SESSION["Guest_value"] == 1)
							header('Location: Exit_a_Guest_option.php');
					}
		if(isset($_SESSION["Login_Status"]))
			{
				header('Location: index.php');
			}
	$_SESSION["value"]=NULL;
	header('Content-Type: text/html; charset=utf-8');	//For Gujarati 
	if($_POST["submit"] == "Search Above Query 1")
	{
		$_SESSION["value"] = $_POST["Gu_input"];
		//echo $_POST["Gu_input"];
	}
	else if($_POST["submit"] == "Search Above Query 2")
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="The-Logo.png">

    <title>Vernacular Search</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/step_1.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?php
		include 'header_guest_new_4.php';
	?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="margin-left:15%;">
	  
         <p id="size"><b>Select keyword after translator :&nbsp;<font color="red">Meaning</font></b></p><br>
		 <p>Given English Input is :<font color="orange">&nbsp;<?php if(isset($_SESSION["English_value_for_Display"])){ echo $_SESSION["English_value_for_Display"];}else{echo  $_SESSION["Eng_input_for_api"];}?></font> </p>
		 <p>After Translator  : <font color="orange"><?php echo $_SESSION["value"];?></font></p><br>
		 
		 <form method="post" action="Guest_verify.php">
<?php
	include 'connection_php.php';	//This is use for connect mySQL 
	
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
        <p style="left:15%"><input type="text" name="English_meaning1" id="English_meaning1" style="float:left;height:30px; width:30%" value="<?php echo $row["English_meaning1"];?>"/><input type="submit" class="btn btn-success" value="Meaning1" name="submit" style="float:left;margin-left:10px;margin-top:0px;"/></p><br><br>
			<?php
							}
						if($row["English_meaning2"]!=null)
							{
				?>
        <p style="left:15%"><input type="text" name="English_meaning2" id="English_meaning1" style="float:left;height:30px; width:30%; margin-top:10px;" value="<?php echo $row["English_meaning2"];?>" /> <input type="submit" class="btn btn-success" value="Meaning2" name="submit" style="float:left;margin-left:10px;margin-top:5px;"/></p><br><br>
        <?php
							}
						if($row["English_meaning3"]!=null)
							{
				?>
		<p style="left:15%"><input type="text" name="English_meaning3" id="English_meaning1" style="float:left;height:30px; width:30%; margin-top:10px;" value="<?php echo $row["English_meaning3"];?>"/> <input type="submit" class="btn btn-success" value="Meaning3" name="submit" style="float:left;margin-left:10px;margin-top:5px;"/></p><br>
		<p style="left:15%"><a  href="new  2.php" role="button" style="margin-left:100px;margin-top:-100px;">&laquo;&nbsp;Back</a></p>
		<?php
							}
				}
	}
?>
      </div>
	  <BR><BR>
    </div>

    <div class="container" >
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" style="position:relative;float:left;left:12%;">
          <h2 style="color:orange;">Why English ?</h2>
          <p>When you talk about English language, in now a days it's possible that many people are not aware how to write Gujarati word in Gujarati.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" style="left:11%;">
          <h2 style="color:orange;">કેમ ઇંગલિશ ?</h2>
          <p>આજે તે ઘણા લોકો ગુજરાતીમાં ગુજરાતી શબ્દ લખવા માટે પરિચિત નથી તે શક્ય છે . તેથી અમે ઇંગલિશ ઇનપુટ આપીં યુ છે. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4" style="left:9.5%;">
          <h2 style="color:pink">ઇંગલિશ મા સમસ્યા છે ?</h2>
          <p>ઘણા લોકો સક્ષમ  નથી ઇંગલિશ માં ગુજરાતી લખવા માટે. તેથી તેને બોવ સમસ્યા ને સામનો કેરવો પડે  છે. જયારે તેમને internetકઈ શોધ મારવી હોઈ ત્યારે. તેવા લોકો માટે ,અમે કંઇક અલગ વર્ચ્યુઅલ કીબોર્ડ અમે  પૂરી પાડે છે.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>
		<footer style="float:left;left:120px;margin-left:33%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
