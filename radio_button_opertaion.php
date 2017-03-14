<?php
	session_start();
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

    <title>Vernacular Search</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

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
            <li><a href="Home_page.php">Home</a></li>
            <li><a href="History_use.php">History</a></li>
			<li><a href="About.php">About</a></li>
            <li><a href="Help.php">Help</a></li>
			<li><a href="#"><?php
				if(isset($_SESSION["Login_Status"]))
					{
						if($_SESSION["Login_Status"]!=null && $_SESSION["User_name"]!=null)
							{
								if($_SESSION["Login_Status"]==Admin)
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
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="Adim_user_data.php">User Data<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Feedback Detail</a></li>
            <li><a href="Admin_suggestion.php">Suggestion Word</a></li>
            <li><a href="Admin_Dictionary_data.php">Dictionary Database</a></li>
            <li class="active"><a href="Admin_user_History.php">User History</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Back to Home</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Database</h1>
			<font color="red"><p id="demo"></p></font>
          <h2 class="sub-header"><font color="green"><?php echo "History of ".$_POST["select_value"]; ?></font></h2>
          <div class="table-responsive">
		<form method="post" action="Admin_user_History.php">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>#</th>
                  <th>Search Word</th>
                  <th>Pc Name</th>
                  <th>Pc IP</th>
                  <th>Date</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
				 <?php
									
									include 'connection_php.php';
									$database="client history";
									$userName = $_POST["select_value"];
									mysql_select_db($database,$connection);
									mysql_query("set names utf8");
									$sql = "SELECT * FROM `$userName`";
									$result= mysql_query($sql);
									$num = mysql_num_rows($result);
									if($num != 0){
									while($row=mysql_fetch_array($result))
										{
				?>
                <tr>
                  <td><input type="checkbox" name="check_box[]" value="<?php echo $row["word"]; ?>"/></td>
                  <td><?php echo $row["Word"]; ?></td>
                  <td><?php echo $row["Pc_name"]; ?></td>
                  <td><?php echo $row["Pc_ip"]; ?></td>
                  <td><?php echo $row["date"]; ?></td>
                  <td><?php echo $row["Time"]; ?></td>
                </tr>
				<?php
										}
									}
				?>
				<tr>
					<?php
						if(isset($_SESSION["Selected_Error"]))
							{
								if($_SESSION["Selected_Error"]==1)
								{
										?>
											<font color="red">&nbsp;*&nbsp;You Are Not Selected Any Record</font>
										<?php
									$_SESSION["Selected_Error"]=0;
								}
							}
					?>
				</tr>
              </tbody>
            </table>
				<button type="submit" class="btn btn-success">See Another Person History</button>
				<a href="Registration_page.php" style="margin-left:810px;">Insert A New Keyword &raquo;</a>
			</form>
          </div>
        </div>
      </div>
    </div>
	 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
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