<?php
	session_start();
	$_SESSION["values"]=null;
	$_SESSION["G_keyboard_value_no"] = 1;
?>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
	
body	
		{
			background-color:#555;
			background:(255,255,255,0.3);
		}
		
#texteffect
		{
			background-color:#FFF;
				
				
		}
#container		
		{
		border-radius:25px;
		background-color:#ddd;
		padding-top:20px;
		padding-bottom:20px;
		height:95%;
		width:85%;
		position:relative;
		border:1px groove;
		}
input
		{
			font-size:110%;
			border-radius:8px;
			height:45px;
			width:100px;
			/*background:rgba(255,255,255,0.1);*/
			background:#000;
			color:#FFF;
			transition:all .5s ease;
		}
input:hover
	{
		cursor:pointer;
		transform:scale(1.13);
	}
	
#texteffect
	{
		color:#000;
		height:35px;
		transform:scale(1.03)!important;
	}
#hr1
	{
		opacity:0;
	}
#reset
	{
		float:left;
		margin-left:25px;
	}
#backsp
	{
		float:right;
		margin-right:25px;
	}
#close
		{
			height:10px;
			width:10px;
			float:right;
			margin-top:-50px;
			margin-right:45px;
			transform:scale(0.3);
		}
#submit
		{
			margin-top:-50px;
		}
	</style>
	</head>
	<body>

	<center>
	<div id="container">
	<form method="post" action="get_value.php" >
	<input type="text" id="texteffect"  style="height:35px; width:375px" name="texteffect"  value="<?php echo $_SESSION["Previous_text"].$_SESSION["Gujarati_value"]?>" /><br>
	
	<a href="options.php">
		<div id ="close">
			<img src="close.png">
		</div>
	</a>
	<br><br>
	
	<input type="submit" name="submit" value="ક" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ખ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ગ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઘ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ચ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="છ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="જ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઝ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ટ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઠ​" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="ડ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઢ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ણ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ત​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="થ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="દ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ધ​" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="ન​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="પ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ફ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="બ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ભ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="મ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ય​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ર​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="લ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="વ​" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="શ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ષ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="સ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="હ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ળ​" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ક્ષ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="જ્ઞ" >&nbsp;&nbsp;
	<hr><!-- From અ to ઔ-->
	<input type="submit" name="submit" value="અ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="આ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઇ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઈ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઉ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઊ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઋ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ૠ" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="એ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઐ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઓ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઔ" >&nbsp;&nbsp;
	
	<!--This is Different Action part-->
	<hr>
	<input type="submit" name="another_section_1" value="ા">
	<input type="submit" name="another_section_1" value="િ">
	<input type="submit" name="another_section_1" value="ી">
	<input type="submit" name="another_section_1" value="ુ">
	<input type="submit" name="another_section_1" value="ૂ">
	<input type="submit" name="another_section_1" value="ે"><br><br>
	<input type="submit" name="another_section_1" value="ૈ">
	<input type="submit" name="another_section_1" value="ો">
	<input type="submit" name="another_section_1" value="ૌ">
	<input type="submit" name="another_section_1" value="ં">
	
	<!--End part-->
	
	<!-- Combination part-->
	<input type="submit" name="Combination_section_1" value="્">
	<hr id="hr1">
	<input type="submit" name="Reset" value="Reset" id="reset"/>
	<input type="submit" name="BackSpace" value="BackSpace" id="backsp"/>
	<br><br><br><br>
	<input type="submit" value="Submit_value"  id="submit" name="submit" style="height:40px;width:auto;"/>
	</form>
	</div>
	</center>
	</body>
</html>