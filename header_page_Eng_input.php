<?php
	//session_start();
	if(!isset($_SESSION["Login_Status"]))
		{
			//if($_SESSION["Login_Status"]==null)
					//	header('Location: Home_page.php');
		}
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
    <link rel="icon" href="../../favicon.ico">

    <title>Vernacular Search</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#">Vernacular Search</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Home_page.php">Home</a></li>
            <li><a href="History_use.php">History</a></li>
			<li><a href="About.php">About</a></li>
            <li><a href="Help.php">Help</a></li>
			<li><a href="#"><?php
				if(isset($_SESSION["Login_Status"]))
					{
						if($_SESSION["Login_Status"]!=null && $_SESSION["User_name"]!=null)
							{
								if($_SESSION["Login_Status"]=='Admin')
									echo $_SESSION["User_name"]."[".$_SESSION["Login_Status"]."]";
								else
									echo $_SESSION["User_name"];
				?>
								<!--sign_out
									<a href="sign_out_session.php">
										<div id="sign_out_container">
												Welcome To SIGN OUT
										</div>
									</a>-->
								<!--End of sign_out-->
				<?php
							}
						else
							echo "SIGN IN";
					}
				else
					{
						echo "SIGN IN";
					}
			?></a></li>
			<li><a href="sign_out_session_1.php">
				<font color="orange">
					Sign out
				</font>
			</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="Home_page.php">હોમ પેજ <span class="sr-only">(current)</span></a></li>
            <li><a href="History_use.php">ઇતિહાસ</a></li>
            <li><a href="About.php">અમારા બારમાં</a></li>
            <li><a href="Help.php">હેલ્પ</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="" style="color:#333;">Progress part</a></li>
            <li class="active"><a href="new  2.php">પ્રથમ ચરણ</a></li>
            <li><a href="">બીજું ચરણ</a></li>
            <li><a href="">ત્રિજુ ચરણ</a></li>
            <li><a href="">છેલ્લા ચરણ</a></li>
          </ul>
		  <ul class="nav nav-sidebar">
			<li><a href="" style="color:#333;">New Features</a></li>
            <li><a href="First_page.php" style="color:red;">Virtual keyboard</a></li>
		  </ul>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
