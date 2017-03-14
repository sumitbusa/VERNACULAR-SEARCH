<?php
//	session_start();
?>
<html>
	<head>
		 <link rel="stylesheet" type="text/css" href="css/Header.css">
	</head>
<body>
<!--Header part-->
		<div id="header_blank">
		</div>
		<div id="header">
			<div id="blank_logo">
			</div>
			<div id="logo_pic">
				<img src="Images/The-Logo.png" id="logo_pic_1"/>
			</div>
			<div id="blank_menu">
			</div>
				<div id="blank_between_menu">
				</div>
			<div id="menu_div_home">
				<center>HOME</center>
			</div>
			<div id="menu_div">
				<center>HISTORY</center>
			</div>
			<div id="menu_div">
				<center>ABOUT</center>
			</div>
			<div id="menu_div">
				<center>HELP</center>
			</div>
		</div>
		<a href="index.php">
		<div id="login_part">
			<center>
			<?php
				if(isset($_SESSION["Login_Status"]))
					{
						if($_SESSION["Login_Status"]!=null && $_SESSION["User_name"]!=null)
							{
								if($_SESSION["Login_Status"]==Admin)
									echo $_SESSION["User_name"]."[".$_SESSION["Login_Status"]."]";
								else
									echo $_SESSION["User_name"];	
							}
						else
							echo "SIGN IN";
					}
				else
					echo "SIGN IN";
			?>
			</center>
		</div>
		</a>
<!--Header Part-->
</body>
</html>