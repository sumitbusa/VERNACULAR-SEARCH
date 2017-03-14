<?php
	//session_start();
if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
?>
<!--Admin_setting-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Admin_setting.css">
		<link rel="shortcut icon" href="images/The-Logo.png">
	</head>
	<body>
<!--Header_part-->
	<?php
		include 'header_with_sign_out.php';
	?>
<!--Main Container
		<div id="main_part"> -->
			<!--Detail part-->
				<div id="blank_detail_part">
				</div>
				<div id="detail_part">
					<!--Blank part-->
						<div id="blank_space_part">
						</div>
					<!--End of Blank part-->
					<!--Link part-->
					<a href="User_Data.php">
						<div id="Link_div">
							<font color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
						</div>
					</a>
							<div id="blank_div_between_link">
							</div>
					<a href="">
						<div id="Link_div">
							<font color="green">Feedback Detail&nbsp;</font>
						</div>
					</a>
							<div id="blank_div_between_link">
							</div>
					<a href="suggestion_table.php">
						<div id="Link_div">
							<font color="green">Suggestion Word</font>
						</div>
					</a>
							<div id="blank_div_between_link">
							</div>
					<a href="Dictionary_data.php">
						<div id="Link_div_DD">
							<font color="green">Dictionary Database</font>
						</div>
					</a>
							<div id="blank_div_between_link">
							</div>
					<a href="">
						<div id="Link_div">
							<font color="green">&nbsp;&nbsp;&nbsp;User History&nbsp;&nbsp;&nbsp;&nbsp;</font>
						</div>
					</a>
							<div id="blank_div_between_link">
							</div>
					<!--End of Link part-->
					<!--Button part-->
						<a href="Admin_index.php">
							<div id="back_button">
								Back
							</div>
						</a>
					<!--End of Button part-->
				</div>
			<!--End of Detail part---->
	<!--	</div> -->
<!--End of Main Container---->
	</body>
</html>