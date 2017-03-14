<?php
	session_start();
	if($_SESSION["Login_Status"]==null)
				header('Location: index.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/step_2.css">
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="https://www.google.com/jsapi">
		</script>
 
	<script type="text/javascript">

        google.load("language", "1");
        function myfunction() {
           var filed = 'Eng_input'
           var strEngName = '<?php if(isset($_SESSION["Eng_input_for_api_pass_Translator"])){ echo $_SESSION["Eng_input_for_api_pass_Translator"];}else{echo  $_SESSION["Eng_input_for_api"];}?>'
            var strEngArray = new Array();
            strEngArray = strEngName.split(" ");
            var str = '';
            for (i = 0; i < strEngArray.length; i++)
             {
                  var temp = strEngArray[i];

                    google.language.transliterate([strEngArray[i]], "en", "gu", function(result) {
                    if (!result.error) {
                        var container = document.getElementById('Gu_input');
                        if (result.transliterations && result.transliterations.length > 0 && result.transliterations[0].transliteratedWords.length > 0) {

                           
                            container.value = result.transliterations[0].transliteratedWords[0];
                            str = str + ' ' + container.value;
                           
                        }
                        document.getElementById('Gu_input').value = str;
                    }

                }
                );
            }

            str = '';
         if (document.getElementById('Eng_input').value.length == 0) {

            document.getElementById('Gu_input').value = '';
           
        }
        /*document.getElementById('Eng_input').value = document.getElementById('Eng_input').value.replace(/^\s+|\s+$/g, '');*/
        
      
        
    }
	google.setOnLoadCallback(myfunction);
    

    </script>		
	</head>
	<body>
	<form method="post" action="Translation_layout.php">
		<?php
			include 'header_page.php';
		?>
		<div id="blank_for_naviagtion">
		<?php
		/*	echo "First : ".$_SESSION["Eng_input_for_api"];
			echo "Sec : ".$_SESSION["Eng_input_for_api_pass_Translator"];*/
		?>
		</div>
		<div id="blank_for_naviagtion_2">
		</div>
		<?php
			include 'navigation_indicator_2.php';
		?>
		<div id="main_content">
			<div id="div_blank_text">
				<h3><center>Select keyword after translator or use virtual keyboard.</center></h3>
			</div>
			<div id="div_blank_text2">
			</div>
				<input type="text" name="Gu_input" id="Gu_input" style="height:30px; width:30%" />
				<input type="submit" value="Search Keyword" name="submit" />
			<div id="blank_input">
			</div>
				<input type="text" name="Gu_input_2" value="<?php if(isset($_SESSION["string_1"])){echo $_SESSION["string_1"];}?>" id="Gu_input" style="height:30px; width:30%"/>
				<input type="submit" value="Search Keyword_1" name="submit" />
				<div id="blank_input_1">
			</div>
			<a href=""><div id="button_div_vitual">Use Virtual Keyboard</div></a>
			<a href="step_1.php"><div id="button_div_vitual">Back</div></a>
		</div>
	</form>
	</body>
</html>