<?php
	session_start();
	if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]==null)
					header('Location: index.php');
		}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/step_1.css">
		<script type="text/javascript" src="js/space.js" ></script>
	</head>
	<body>
	<form method="post" action="Translator.php" name="f1">
		<?php
			include 'header_page.php';
		?>
		<div id="blank_for_naviagtion">
		</div>
		<div id="blank_for_naviagtion_2">
		</div>
		<?php
			//include 'navigation_indicator.php';
		?>
		<div id="main_content">
			<div id="mc_right">
				<div id="head_text">
				     <p id="size"><b>English Input:</b></p><br>
				
				</div>
				<div id="blank_div">
				</div>
						<center>
					<input type="text"  id="Eng_input" name="Eng_input" style="width:400px;height:30px" onkeyup="space_clear()" autofocus required/>  
						</center>
						<font color="red"><p id="demo"></p><h3><br></font>
						<input type="submit" value="Search Above Query  " name="submit" style="margin-left:-10px;" /></h3>
						<a href="keyboard/final/First_page.php"><div id="button_div_vitual">Use Virtual Keyboard</div></a>
			</div>
			<div id="blank_div2">
			</div>
			<div id="Another_part">
			<br><br><br>
				<p id="size_demo">Enter the Keyword you want to search or Click on virtual keyboard. </p>
			</div>
		</div>
	</form>
	</body>
</html>