<?php
	session_start();
		header('Content-Type: text/html; charset=utf-8');
		
		if(!isset($_SESSION["Admin_staus"]))
		{
			if($_SESSION["Admin_staus"] != 'Admin')
				{
					header('Location: index.php');
				}
		}
?>
<!--Login Table-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/login_table.css">
	</head>
	<body>
	<form method="post" action="check_box_opertaion.php">
		<!--Starting block-->
				<?php
					include 'User_Data.php';
				?>
		<!--End of Starting Block-->
		<!--Table part-->
				<div id="table_part">
					<!--upper Blank part-->
						<div id="upper_blank_part">
							<font color="pink"><h3>Login Table</h3></font>
						</div>
					<!--End of upper Blank part-->
						<div id="main_table">
							<div id="blank_div">
							</div>
							<table border="0px">
								<tr>
								<th></th>
									<th>UserName</th>
									<th>Password</th>
									<th>&nbsp;&nbsp;Status&nbsp;&nbsp;</th>
								</tr>
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
											<tr>
												<td><input type="checkbox" name="check_box[]" value="<?php echo $row["user_name"]; ?>"/></td>
												<td><?php echo $row["user_name"]; ?></td>
												<td><?php echo $row["password"]; ?></td>
												<td><?php echo $row["status"]; ?></td>
											</tr>
								<?php
										}
								?>
							</table>
						</div>
				</div>
				<div id="blank_space_before">
					<?php
						if(isset($_SESSION["Selected_Error"]))
							{
								if($_SESSION["Selected_Error"]==1)
								{
										?>
											<font color="red">&nbsp;*&nbsp;You Are Not Selected Any User Record</font>
										<?php
								}
							}
					?>
				</div>
				<input type="submit" name="submit" value="Delete Account"/> <div id="blank_space"></div>
				<a href="Registration updated.php">
					<div id="add_account">
						Add Account
					</div>
				</a>
		<!--End of Table part-->
	</form>
	 <hr>

      <footer style="float:left;left:120px;margin-left:33%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>