<?php
	//session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/navigation.css">
	</head>
	<body>
		<script>
		function cantaine_div_block(x) 
			{	cantaine_div.style.display ="block";	}
		function cantaine_div_block_none(x) 
			{	cantaine_div.style.display ="none";	}
	</script>
		<div id="black_image_div">
		</div>
		<!--<div id="image_div_operlap">
		</div>-->
		<div id="container">
			<div id="image_div" onmouseover="cantaine_div_block(this)" onmouseout="cantaine_div_block_none(this)">
				<a href="Admin_setting.php"><img src="images/setting_logo.png" /></a>
			</div>
			<div id="blank_div_up">
			</div>
			<div id="cantaine_div" style="display:none;">
				<?php
				?>
				ADMIN LOGO
			</div>
		</div>
	</body>
</html>