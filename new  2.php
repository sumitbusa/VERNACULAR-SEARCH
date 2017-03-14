<?php
	session_start();
	if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]==null)
					header('Location: index.php');
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<script type="text/javascript" src="js/space.js" ></script>
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
		include 'header_page_Eng_input.php';
	?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="margin-left:15%;">
		<form method="post" action="Translator.php" name="f1">
			<p id="size"><b>English Input :</b></p><br>
			<p style="left:15%"><input type="text"  id="Eng_input" name="Eng_input" style="width:400px;height:30px" onkeyup="space_clear()" autofocus required/></p>
			<p style="left:15%"><input type="submit" class="btn btn-success" value="Search Above Query &nbsp; &raquo;" name="submit" style="margin-left:-10px;margin-top:35px;"/></p>
			<p style="left:15%"><a class="btn btn-primary btn-lg" href="G_keyboard.php" role="button" style="margin-left:500px;margin-top:-100px;">Use Virtual Keyboard &raquo;</a></p>
		</form>
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

      <footer style="float:left;left:120px;margin-left:15%;">
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
