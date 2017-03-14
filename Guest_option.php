<?php
	session_start();
	if(!isset($_SESSION["Login_Status"]))
		{
			$_SESSION["Guest"] = 1;
		}
	if(isset($_SESSION["Guest_value"]))
		{
			if($_SESSION["Guest_value"] == 1)
				header('Location: Exit_a_Guest_option.php');
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
    <link rel="icon" href="../../favicon.ico">

    <title>English Input</title>

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
		include 'Guest_header_page_option.php';
	?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="margin-left:15%;">
		<form method="post" name="f1">
			<p>Limitation For Guest User :<br><font color="green" size="3.2px"><br>&raquo;&nbsp;When you use our application without login then you some Limitation.<br>&raquo;&nbsp;You can use our application for Search only 3 words.<br>&raquo;&nbsp;If you want to use our application to Find more Words , you want to Register our Application, it's Free.<br>&raquo;&nbsp;if you want to Register or Login see Left side or in header option is available.</font> </p>
			<p style="left:15%"><a class="btn btn-primary btn-lg" href="Guest_option_2.php" role="button" style="float:left;margin-left:500px;margin-top:0px; background-color:orange">Next &raquo;</a></p>
		</form>
      </div>
	  <BR><BR>
    </div>

    <div class="container" >
      <!-- Example row of columns -->
      
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