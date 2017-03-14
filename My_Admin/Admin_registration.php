<?php
	session_start();
	if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<script type="text/javascript" src="js/check_box.js" ></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="icon" href="The-Logo.png">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

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
			<li><a href="#"><font color="red">Admin</font></a></li>
			<li><a href="sign_out_session.php">sign out</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="Adim_user_data.php">User Data<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Feedback Detail</a></li>
            <li><a href="Admin_suggestion.php">Suggestion Word</a></li>
            <li><a href="Admin_Dictionary_data.php">Dictionary Database</a></li>
            <li><a href="Admin_user_History.php">User History</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="sign_out_session.php">sign out</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">User Data</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <!--<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>-->
              <!--<span class="text-muted">Something else</span>-->
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" src="images/login.png" style="height:180px;width:180px;">
              <a href="Admin_page.php"><h4>Login Table</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" src="images/Registration_pic.png" style="height:180px;width:180px;">
              <h4>Registration Table</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <!--<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>-->
            </div>
          </div>

          <h2 class="sub-header"><font color="green">Registration Table</font></h2>
          <div class="table-responsive">
		  <form method="post" action="check_box_opertaion.php">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First_name</th>
                  <th>Last_name</th>
                  <th>UserName</th>
                  <th>Password</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
				<?php
									$database="Translator";
									include 'connection_php.php';
	
									mysql_select_db($database,$connection);
	
									$sql = "SELECT * FROM `registration_table` LIMIT 0, 30 ";
									$result= mysql_query($sql);
									$num = mysql_num_rows($result);
									while($row=mysql_fetch_array($result))
										{
				?>
                <tr>
                  <td><input type="checkbox" name="check_box[]" value="<?php echo $row["user_name"]; ?>"/></td>
                  <td><?php echo $row["First_name"]; ?></td>
                  <td><?php echo $row["Last_name"]; ?></td>
                  <td><?php echo $row["user_name"]; ?></td>
                  <td><?php echo $row["password"]; ?></td>
                  <td><?php echo $row["gender"]; ?></td>
                  <td><?php echo $row["dob"]; ?></td>
                  <td><?php echo $row["status"]; ?></td>
                </tr>
				<?php
										}
				?>
				<tr>
					<?php
						if(isset($_SESSION["Selected_Error"]))
							{
								if($_SESSION["Selected_Error"]==1)
								{
										?>
											<font color="red">&nbsp;*&nbsp;You Are Not Selected Any User Record</font>
										<?php
									$_SESSION["Selected_Error"]=0;
								}
							}
					?>
				</tr>
              </tbody>
            </table>
				<button type="submit" class="btn btn-success">Delete Record</button>
				<a href="Registration_page.php" style="margin-left:900px;">Add another account &raquo;</a>
			</form>
          </div>
        </div>
      </div>
    </div>
	 <hr>

      <footer style="float:left;left:120px;margin-left:25%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
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
