<?php
	session_start();
	$_SESSION["English_value_for_Display"] = $_SESSION["Eng_input_for_api_pass_Translator"];
	if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Guest"] != 1)
					header('Location: index.php');
		}
			if(isset($_SESSION["Guest_value"]))
				{
					if($_SESSION["Guest_value"] == 1)
						header('Location: Exit_a_Guest_option.php');
				}
			if(isset($_SESSION["Login_Status"]))
				{
					header('Location: index.php');
				}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="The-Logo.png">
	<script type="text/javascript" src="https://www.google.com/jsapi">
	</script>
    <title>Vernacular Search</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/step_1.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            str = str + '' + container.value;
                           
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
	<?php
		include 'header_guest_new_3.php';
	?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="margin-left:15%;">
	  <form method="post" action="Guest_new_4.php">
         <p id="size"><b>Select keyword after translator :&nbsp;<font color="red">Meaning</font></b></p><br>
        <p style="left:15%"><input type="text" name="Gu_input" id="Gu_input" style="height:30px; width:30%" /></p>
        <p style="left:15%"><input type="text" name="Gu_input_2" id="Gu_input" style="height:30px; width:30%" value="<?php if(isset($_SESSION["string_1"])){echo $_SESSION["string_1"];}?>" id="Gu_input" style="height:30px; width:30%" /></p>
        <p style="left:15%"><input type="submit" class="btn btn-success" value="Search Above Query 1" name="submit" style="float:left;margin-left:-10px;margin-top:35px;"/></p>
        <p style="left:15%"><input type="submit" class="btn btn-success" value="Search Above Query 2" name="submit" style="float:left;margin-left:10px;margin-top:35px;"/></p>
		<p style="left:15%"><a  href="new  2.php" role="button" style="margin-left:100px;margin-top:-100px;">&laquo;&nbsp;Back</a></p>
		<p style="left:15%"><a class="btn btn-primary btn-lg" href="First_page.php" role="button" style="margin-left:200px;margin-top:-150px;">Use Virtual Keyboard &raquo;</a></p>
      </form>
	  </div>
	  <BR><BR>
    </div>

    <div class="container" >
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" style="position:relative;float:left;left:12%;">
          <h2 style="color:orange;">Why English ?</h2>
          <p>When you talk about English language, in now a days it's possible that many people are not aware how to write Gujarati word in Gujarati.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4" style="left:11%;">
          <h2 style="color:orange;">કેમ ઇંગલિશ ?</h2>
          <p>આજે તે ઘણા લોકો ગુજરાતીમાં ગુજરાતી શબ્દ લખવા માટે પરિચિત નથી તે શક્ય છે . તેથી અમે ઇંગલિશ ઇનપુટ આપીં યુ છે. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4" style="left:9.5%;">
          <h2 style="color:pink">ઇંગલિશ મા સમસ્યા છે ?</h2>
         <p>ઘણા લોકો સક્ષમ  નથી ઇંગલિશ માં ગુજરાતી લખવા માટે. તેથી તેને બોવ સમસ્યા ને સામનો કેરવો પડે  છે. જયારે તેમને internetકઈ શોધ મારવી હોઈ ત્યારે. તેવા લોકો માટે ,અમે કંઇક અલગ વર્ચ્યુઅલ કીબોર્ડ અમે  પૂરી પાડે છે.</p>
         <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		</div>
		 <hr>

      <footer style="float:left;left:120px;margin-left:25%;">
        <p>&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
