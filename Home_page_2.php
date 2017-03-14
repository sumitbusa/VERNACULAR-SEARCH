<?php
	session_start();
		if(isset($_SESSION["Guest_value"]))
		{
			if($_SESSION["User_name"] != null)
			{
				if($_SESSION["Guest_value"] != 1)
					header("Location: Home_page.php");
			}
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
    <link rel="icon" href="The-Logo.png">

    <title>Vernacular Search</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
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
          <a class="navbar-brand" href="#">Varnacular Search</a>
        </div>
		<?php
			if(!isset($_SESSION["Login_Status"]))
			{
				//if($_SESSION["Login_Status"] == null)
				//	{
		?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" action="verification_1.php">
            <div class="form-group">
              <input type="text" placeholder="User Name" name="uname" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="pwd" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
		  
        </div><!--/.navbar-collapse -->
		<?php
				//	}
			}
				else
				{
		?>
			<div style="float:right; right:0px;"/>
			<font color="#FFFFFF">
		<?php
				echo "Welcome ! ".$_SESSION["User_name"];
		?>
			<a href="sign_out_session_1.php">
		<?php
				echo "<br> Sign out ";
		?>
			</a>
		<?php
				}
		?>
			</font>
			</div>
		<div style="float:right; right:0px;"/>
		<font color="red"><?php if(isset($_SESSION["Error"])){if($_SESSION["Error"]==1){echo "Error : The user_name and password is incorrect";}}?></font></div>
      </div>
    </nav>

    <!--<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><font color="green">Translation And Search</font></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>-->


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Vernacular Search</h1>
              <p> For Applying  your Suggestion   <code>Sign in</code> Your Suggestions helps Us to make Our application More Efficient .</p>
              <p><a class="btn btn-lg btn-primary" href="Registration updated.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color="orange"> વર્ચ્યુઅલ કીબોર્ડ. </font></h1>
              <p> વર્ચ્યુઅલ કીબોર્ડ  ડાયરેક્ટ ગુજરાતી શબ્દો આપી શકશે</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Guest User</h1>
              <p>Skipping Login & registration procedure ,Guest login is for One time and Quick use of this application.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
	<div class="row">
		<div class="col-lg-4">
			<!--<p><a class="btn btn-lg btn-primary" href="options.php" role="button">Start Processing </a></p>-->
			<p><a class="btn btn-lg btn-primary" href="options.php" role="button" style="margin-left:100px;">Start Processing &raquo;</a></p>
		</div>
		<div class="col-lg-4">
			<!--<p><a class="btn btn-lg btn-primary" href="options.php" role="button" style="background-color:orange;">પ્રક્રિયા શરૂ કરો  </a></p>-->
			<p><a class="btn btn-lg btn-primary" href="options.php" role="button" style="background-color:orange;margin-left:100px;">પ્રક્રિયા શરૂ કરો &raquo;</a></p>
		</div>
		<div class="col-lg-4">
			<!--<p><a class="btn btn-lg btn-primary" href="Guest_option.php" role="button" style="background-color:green">Guest User </a></p>-->
			<p><a class="btn btn-lg btn-primary" href="Guest_option.php" role="button" style="background-color:green;margin-left:100px;">Guest User &raquo;</a></p>
		</div>
		<!--<a href="#">
                                <div border="0" alt="auction slider" width="100px"
                                     height="auto"  style="float:left;padding: 10px 70px 2px 80px;border-radius: 1em 1em 1em 4em;box-shadow: 2px 2px 2px 1px #000;background-color:orange" >Start Processing</div>
        </a>-->
	</div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Use of Translator. 
          <p class="lead">Turn English Alphabet Input in Suitable Gujarati Vocabulary. Using  Google  & Private Translator, Where user can write Gujarati word in English,Resulting in Gujarati Letters.</p>
        </div>
        <div class="col-md-5"><br><br>
          <img class="featurette-image img-responsive center-block" src="images/Provide_English_input.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Translation. 
          <p class="lead">It is the heart of the Project. It literally converts a Gujarati Keyword into its Exact Meaning in English Language</p>
        </div><br><br>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/Translation.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Virtual Keyboard 
          <p class="lead">Virtual keyboard is very important Feature. Especially important for those Who are  not able to type Gujarati Word in English. So it helps to all Gujaratis, Who aren't able to write English word.</p>
        </div><br><br>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/Virtual_keyboard.png">
        </div>
      </div>

      <hr class="featurette-divider">
	  <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="images/sumitbusaedited.jpg"   width="140" height="140">
          <h2>Sumit Busa</h2>
          <p>Sumit Busa is a Student of SBMP . He is Back End developer of this web application. Including a Translator , Virtual keyboard and all other server programs </p>
          <p><a class="btn btn-default" href="About.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="images/yagnesh.jpg" width="140" height="140">
          <h2>Yagnesh Devashrayee</h2>
          <p>Yagnesh Devashrayee is a student of SBMP. He is Designer of this web application . Including all Designing page.</p>
          <p><a class="btn btn-default" href="About.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Devansh Thaker</h2>
          <p>Devansh Thaker is a Student of SBMP. Responsible for Document Section </p>
          <p><a class="btn btn-default" href="About.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


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
