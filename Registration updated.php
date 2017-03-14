<?php
	session_start();
	if(isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]!=null)
						header('Location: index.php');
		}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Registration updated.css">
		<link rel="stylesheet" href="css/registration.css">
	<script>
function myFunction()
	{
		var Password = document.forms["Registerform"]["pass1"].value;
		var pass_length=Password.length;
			if(pass_length < 7 && pass_length < 15)
				{
					alert("Password must in available format ");
					return false
				}
	}	
    </script>
	<link rel="icon" href="The-Logo.png">
	</head>
	<body>
	<?php
			include 'header_registration.php';
	?>
	
	
	<div id="blank"></div>
		<div id="main_content">
			<div id="mc_right">
			
				<img src="images/Regisbg.png" id="registrationimg"/>
				<!--img src="regisbg1.png"-->
			</div>
			<div id="mc_left">
	<div id="container" >
					<form name="Registerform" method="post" onsubmit="myFunction();" action="Registration_Data.php">
						<table>
						<tr>
							<th id="formheadedit">
								Registration..
							</th>
						</tr>
						<tr>
							<th> <input type="text" name="F_name" placeholder="First name" autofocus id="insidebox" required >  </th>
						</tr>
						<tr>
							<th>   <input type="text" name="L_name" placeholder="Last name"  id="insidebox" required></th>
						</tr>
						<tr>
							<th>   <input type="text" name="User_id" placeholder="User_id"  id="insidebox" required></th>
						</tr>
						<tr>
							<th>
									Gender :&nbsp;&nbsp;&nbsp;
									<input type="radio" name="gender" value="Male" checked> Male
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Female">	Female
							</th>
						</tr>
						<tr>
							<th><input type="password" name="pass1" placeholder="Password" id="insidebox" required></th>
						</tr>
						<tr>
							<th><input type="password" name="pass2" placeholder="Reconfirm password" id="insidebox" required></th>
						</tr>
						<tr>
							<th>DOB:
								<select  name="month">
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								</select>
								<select name="date">
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
								<select name="year">
									<option value="1990">1990</option>
									<option value="1991">1991</option>
									<option value="1992">1992</option>
									<option value="1993">1993</option>
									<option value="1994">1994</option>
									<option value="1995">1995</option>
									<option value="1996">1996</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
									<option value="2005">2005</option>
									<option value="2006">2006</option>
									<option value="2007">2007</option>
									<option value="2008">2008</option>
									<option value="2009">2009</option>
									<option value="2010">2010</option>
									<option value="2011">2011</option>
									<option value="2012">2012</option>
									<option value="2013">2013</option>
									<option value="2013">2014</option>
								</select>
							</th>
						</tr>
							<tr>
								<td><font color="red"><?php if(isset($_SESSION["Register_Error"])){if($_SESSION["Register_Error"]==1){echo "*Please Enter different User_id and password";}}?></font></td>
							</tr>
						<tr>
							<td><input type="submit" name="submit" class="submit_effect" value="Register.."></td>
						</tr>
						<tr>
							<td style="font-size:15px;float:left;">(All fields are mandatory) </td>
						</tr>	
						<tr>
							<th><a href="index.php" >Already Registered?</a></th>
						</tr>
				</table>
		</form>
    </div>
	</div>
		 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</div>
	
	</body>
</html>