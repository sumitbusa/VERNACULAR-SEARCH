<?php
	session_start();
		header('Content-Type: text/html; charset=utf-8');
		
		if(isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]!=Admin)
					header('Location: index.php');
		}
		else
		{
			header('Location: index.php');
		}
?>
<!--user_data/User_Data.php-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/User_Data_History.css">
	</head>
	<body>
		<!--Admin_setting_first_part-->
			<?php
				include 'Admin_setting.php';
			?>
		<!--End of Admin_setting_first_part-->
		<div id="detail_Data">
			<div id="blank_space_part_data">
			</div>
			<div id="blank_detail_Data">
			</div>
			<?php
									$database="Translator";
									include 'connection_php.php';
	
									mysql_select_db($database,$connection);
	
									$sql = "SELECT * FROM `login_database` LIMIT 0, 30 ";
									$result= mysql_query($sql);
									$num = mysql_num_rows($result);
									while($row=mysql_fetch_array($result))
										{
			?>
				<a href="login_table.php">
					<div id="Link_data">
						Login Table&nbsp;&nbsp;&nbsp;
					</div>
				</a>
					<div id="blank_div_between_link_user_data">
					</div>
				<a href="registration_table.php">
					<div id="Link_data_1">
						Registration Table
					</div>
				</a>
				<div id="blank_div_between_link_user_data_back">
					</div>
				
		</div>
		 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>