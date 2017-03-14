<?php
	session_start();

	if(isset($_SESSION["Login_Status"]))
	{
			if($_SESSION["Login_Status"]=='Admin')
						header('Location: Admin_index.php');
			if($_SESSION["Login_Status"]=='user')
						header('Location: Admin_index.php');
	}
?>
<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="css/layout.css">
	</head>
	<body>
		<!--Header part-->
			<?php
				include 'header_with_sign_out.php';
			?>
		<!--Header Part-->
		<!--Video part-->
		<div id="container">
			<div id="video_blank">
			</div>
			<div id="video_blank_1">
			</div>
			<div id="video">
				<!--<object width="680" height="450" data="https://youtu.be/nJmcqK-ZGvg"></object>-->
				<video id="video" controls>
					<source src="video/technology.mp4" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
			</div>
		</div>
		<!--End of Video part-->
		<!--Login_part-->
			<div id="login_form">
				<div id="blank_div_login">
				</div>
				<div id="blank_div_login_2">
				</div>
				<!--Add login.php-->
					<?php
						include 'Login_page.php';
					?>
			</div>
		<!--End of Login part-->
		<!--Footer part-->
			<div id="Footer">
				 <hr>

			<footer style="float:left;left:120px;margin-left:15%;">
				<p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
			</footer>
			</div>
		<!--End of part-->
	</body>
</html>