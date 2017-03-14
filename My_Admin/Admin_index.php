<?php
	session_start();
?>
<?php
if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
?>
<!--Admin index page-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Admin_index.css">
	</head>
		<body>
			<?php
				require 'header_page.php';
			?>
			<div id="navigation_bar">	
				<div id="blank_div_navigation">
				</div>
				<?php

					if($_SESSION["Login_Status"]=="Admin")
							include 'navigation.php';
				?>
			</div>
			<div id="steps_part">
					<div id="blank_div_main">
						<h2><font color="green"><center>Steps For Search Keyword<center></font></h2>
					</div>
					<div id="blank_num_div">
					</div>
					<div id="number_div">
							<center>1</center>
					</div>
					<div id="container_text"><br>
						Enter the Keyword you want to search.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<!--2 part-->
					<div id="blank_num_div">
					</div>
					<div id="number_div">
							<center>2</center>
					</div>
					<div id="container_text"><br>
						Select keyword after translator or use virtual keyboard.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<!--3 part-->
					<div id="blank_num_div">
					</div>
					<div id="number_div">
							<center>3</center>
					</div>
					<div id="container_text"><br>
						Choose the Meaning of the word.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
					<!--4 th part-->
					<div id="blank_num_div">
					</div>
					<div id="number_div">
							<center>4</center>
					</div>
					<div id="container_text"><br>
						Select Url you want to open.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
			</div>
				<?php
					include 'Available_Table.php';
				?>
		</body>
</html>