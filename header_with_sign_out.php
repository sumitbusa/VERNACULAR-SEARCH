<?php
	//session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/sign_out.css">
		 <link rel="stylesheet" type="text/css" href="css/Header.css">
	</head>
	<body>
	<script>
					function hide_signout()
						{	
							sign_out_container.style.display="none";	
						}
					function gotosignout()
						{
							if (sign_out_container.style.display.match("block"))
							{
								sign_out_container.style.display="none";
							}
							else
							{
								sign_out_container.style.display="block";
							}	
						}
	</script>
<!--Header part-->
		<div id="header_blank" onclick="hide_signout()">
		</div>
		<div id="header" onclick="hide_signout()">
			<div id="blank_logo" onclick="hide_signout()">
			</div>
			<div id="logo_pic" onclick="hide_signout()">
				<img src="Images/The-Logo.png" id="logo_pic_1"/>
			</div>
			<div id="blank_menu" onclick="hide_signout()">
			</div>
				<div id="blank_between_menu" onclick="hide_signout()">
				</div>
			<div id="menu_div_home" onclick="hide_signout()">
				<center>HOME</center>
			</div>
			<div id="menu_div" onclick="hide_signout()">
				<center>HISTORY</center>
			</div>
			<div id="menu_div" onclick="hide_signout()">
				<center>ABOUT</center>
			</div>
			<div id="menu_div" onclick="hide_signout()">
				<center>HELP</center>
			</div>
		</div>
		<div id="login_part" onclick="gotosignout()">
			<center>
			<?php
				if(isset($_SESSION["Login_Status"]))
					{
						if($_SESSION["Login_Status"]!=null && $_SESSION["User_name"]!=null)
							{
								if($_SESSION["Login_Status"]=="Admin")
									echo $_SESSION["User_name"]."[".$_SESSION["Login_Status"]."]";
								else
									echo $_SESSION["User_name"];
			?>
								<!--sign_out-->
									<a href="sign_out_session.php">
										<div id="sign_out_container">
												 SIGN OUT
										</div>
									</a>
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
			?>
			</center>
		</div>
<!--Header Part-->
	</body>
</html>