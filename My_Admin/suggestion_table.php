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
<!--Registration Table-->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/login_table.css">
		<meta charset="UTF-8">
	</head>
	<body>
	<form method="post" action="check_box_opertaion_2.php">
		<!--Starting block-->
				<?php
					include 'Admin_setting.php';
				?>
		<!--End of Starting Block-->
		<!--Table part-->
				<div id="table_part">
					<!--upper Blank part-->
						<div id="upper_blank_part">
							<font color="pink"><h3>suggestion_table</h3></font>
						</div>
					<!--End of upper Blank part-->
						<div id="main_table">
							<div id="blank_div">
							</div>
							<table border="0px">
								<tr>
									<th></th>
									<th>User_name</th>
									<th>Word</th>
									<th>Suggestion_Word</th>
									<th>Location</th>
									<th>Pc_ip_Address</th>
									<th>Date</th>
									<th>Time</th>
								</tr>
								<?php
									$database="Translator";
									include 'connection_php.php';
	
									mysql_select_db($database,$connection);
									mysql_query("set names utf8");
									$sql = "SELECT * FROM `suggestion_table` LIMIT 0, 30 ";
									$result= mysql_query($sql);
									$num = mysql_num_rows($result);
									while($row=mysql_fetch_array($result))
										{
								?>
											<tr>
												<td><input type="checkbox" name="check_box[]" value="<?php echo $row["word"]; ?>"/></td>
												<td><?php echo $row["user_name"]; ?></td>
												<td><?php echo $row["word"]; ?></td>
												<td><?php echo $row["suggestion_word"]; ?></td>
												<td><?php echo $row["location"]; ?></td>
												<td><?php echo $row["PC_IP_Address"]; ?></td>
												<td><?php echo $row["date"]; ?></td>
												<td><?php echo $row["Time"]; ?></td>
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
							<input type="submit" name="submit" value="Add Word"/> <div id="blank_space"></div>
								<a href="Registration updated.php">
									<div id="add_account">
										Add Account
									</div>
								</a>
		<!--End of Table part-->
			<?php
				$_SESSION["Selected_Error"]=null;
			?>
	</form>
	 <hr>

      <footer style="float:left;left:120px;margin-left:33%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>