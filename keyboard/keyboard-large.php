<?php
	session_start();
	//$_SESSION["English_value"]=null;
?>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
#texteffect
		{
			background-color:#FFF;
				
				
		}
#container		
		{
		border-radius:25px;
		background-color:#660066;
		
		padding-top:20px;
		padding-bottom:20px;
		height:90%;
		width:80%;
		position:relative;
		border:1px groove;
		transform:scale(0.05);
		transition:all 1s ease;
		-webkit-animation: mymove 2s;
	-webkit-animation-fill-mode: forwards;
	
}
@-webkit-keyframes mymove{
		from {transform:scale(0.05);}
    to {transform:scale(1.13);}
	
}
		
		
		
   

 {
    from {top: 0px;}
    to {top: 0px;height:640px;}
}
		
		
input
		{
			font-size:100%;
			border-radius:8px; 
			height:45px;
			width:100px;
			background:rgba(255,255,255,0.1);
			color:FFF;
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
	}
	</style>
	</head>
	<body>
	<center>
	<div id="container">
	<form method="post" action="get_value.php">
	<input type="text" id="texteffect" style="height:35px; width:375px" name="texteffect" value="<?php echo $_SESSION["Previous_text"].$_SESSION["Gujarati_value"]?>"><br>
	<br><br>
	<input type="submit" name="Reset" value="Reset"/>
	<input type="submit" name="BackSpace" value="BackSpace"/>
	<input type="submit" name="submit" value="ક" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ખ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ગ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઘ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ચ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="છ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="જ" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="ઝ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ટ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઠ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ડ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ઢ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ણ" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="ત" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="થ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="દ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ધ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ન" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="પ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ફ" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="બ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ભ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="મ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ય" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ર" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="લ" >&nbsp;&nbsp;<br><br>
	<input type="submit" name="submit" value="વ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="શ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ષ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="સ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="હ" >&nbsp;&nbsp;
	<input type="submit" name="submit" value="ળ" >&nbsp;&nbsp;<br><br>
	
	<!--This is Different Action part-->
	<hr>
	<input type="submit" name="another_section_1" value="ા">
	<input type="submit" name="another_section_1" value="િ">
	<input type="submit" name="another_section_1" value="ી">
	<input type="submit" name="another_section_1" value="ુ">
	<input type="submit" name="another_section_1" value="ૂ">
	<input type="submit" name="another_section_1" value="ે">
	<input type="submit" name="another_section_1" value="ૈ"><br><br>
	<input type="submit" name="another_section_1" value="ો">
	<input type="submit" name="another_section_1" value="ૌ">
	<!--End part-->
	</center>
	</div>
	</body>
</html>