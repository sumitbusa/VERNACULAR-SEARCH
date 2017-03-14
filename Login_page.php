<?php
	//session_start();
?>
<html>
  <head>
  <link rel="stylesheet" href="css/Login_page.css">
  <script>
function validateForm(pwd) 
{
    var x = document.forms["login1"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
	{
        alert("Invalid E-mail address");
        return false;
    }
	 var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers
 
  
	if ((pwd.value.length < 7) || (pwd.value.length > 15)) {
        error = "The password is the wrong length. \n";
        pwd.style.background = 'White';
        alert(error);
        return false;
 
    } else if (illegalChars.test(pwd.value)) {
        error = "The password contains illegal characters.\n";
        pwd.style.background = 'White';
        alert(error);
        return false;
 
    } else if ( (pwd.value.search(/[a-zA-Z]+/)==-1) || (pwd.value.search(/[0-9]+/)==-1) ) {
        error = "The password must contain at least one numeral.\n";
        pwd.style.background = 'White';
        alert(error);
        return false;
 
    } else 
	{
        pwd.style.background = 'White';
    }
   return true;
}

</script>
  </head>
  <body>
  
  
  
	<div id="container_login">
		<form name="login1" method="post" Onsubmit="return validateForm(pwd)" action="verification.php">
			<table>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr>
				<th> <img src="images/avatar_2x.png"></th>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr>
				<th> <input type="text" name="uname" placeholder="Username" autofocus id="insidebox" required /></th>
			</tr>
			<tr>
				<th><input type="password" name="pwd" placeholder="password" id="insidebox" required/></th>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="stay_sign_in" value="login" checked /> Stay signed in <br>
				</td>
			</tr>
			<tr>
				<td><font color="red"><?php if(isset($_SESSION["Error"])){if($_SESSION["Error"]==1){echo "Error : The user_name and password is incorrect";}}?></font></td>
			</tr>
			<tr>
				<th><input type="submit" name="submit" class="submit_effect" value="Submit"></th>	
			</tr>
			<tr>
				<td><a href="Registration updated.php">Create an account </a></td>
			</tr>
			</table>
		</form>
	</div>
	</body>
</html>