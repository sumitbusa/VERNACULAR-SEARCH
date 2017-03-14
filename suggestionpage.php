<?php
	session_start();
?>
<html>
	<head>
		<style>
h1
	{
		color:#FFF;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	}
#headingpart
	{
		height:15%;
		width:100%;
		position:fixed;
		top:0px;
		text-align:center;
		background:#222;
		border-bottom:1px solid #000;
	}
#blank
	{
		height:15%;
		width:100%;
		position:relative;
		top:0px;
		text-align:center;
		background:#222;
		border-bottom:1px solid #000;
	}
#details
	{
		position:fixed;
		float:left;
		left:0px;
		top:0px;
		height:100%;
		width:100%;
		background:#F1F1F1;
		border:1px bold #000;
		
	}
#submit
		{
			margin-left:750px;
			z-index:-1;
			border:1px bold #000;
			margin-top:50px;
			border-radius:8px;
			color:white;
			height:50px;
			width:100px;
			transition:all 0.5px ease;
			background-color:orange;
		}
#submit:hover		
		{
			cursor:pointer;
		}
textarea		
		{
			margin-left:45px;
		}
img
		{
		z-index:2;
		}
#inputbox
	{
		float:right;
		width:250px;
		height:25px;
		margin-left:20px;
	}
table
	{
		margin-top:-750px;
		border-radius:8px;
		margin-left:370px;
		border-style:solid;
		opacity:0.9;
		padding: 40px 40px 40px 40px;
	}
td	
	{
		margin-left:;
		font-size:15px;
		height:55px;
		color:#FFF;
		 word-wrap: break-word;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	}

		</style>
	</head>
	<body>
	<form method="post" action="store_suggestionpage.php">
	<div id="Details">
				<div id="blank">
		</div>
		<div id="headingpart">
		<h1>Suggestion Page</h1>
		</div>

		<img src="Images/nicebg.jpg" style="height:100%;width:100%;">
	<table>
	
	
		<tr>
			<td>User : &nbsp; &nbsp; &nbsp; &nbsp;</td>
			<td><input type="text" name="user_name" id="inputbox" style="height:60%;width:85%;" value="<?php echo $_SESSION["User_name"];?>"disabled></td><!--Here Logged in User name will be Displayed -->
		</tr>
		<tr>
			<td>Please Suggest new Keyword:</td><td><input type="text" id="inputbox" style="height:60%;width:85%;" name="suggestion_word"  required></td><!-- Here User  will Enter words absent in Dictionary -->
		</tr>
		<tr>
			<td>Feel Free to Comment :</td><td><textarea  rows="6" cols="30" style="resize:none;width:85%;"  ></textarea> </td>
		</tr>
	</table>
		<input type="submit" value="submit" id="submit">
	</div>
	</form>
	 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</body>
</html>
