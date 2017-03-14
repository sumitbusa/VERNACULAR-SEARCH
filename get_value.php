<?php
	session_start();
	$_SESSION["PREVIOUS"]=null;
	header('Content-Type: text/html; charset=utf-8');
	
	if($_POST["submit"] == "Submit_value")
	{
	//	echo "Submit_part<br>";
		$_SESSION["pass_value_2"] = $_POST["texteffect"];
		//echo $_SESSION["pass_value"];
		header('Location: new  4.php');
	}
else
{
	
	/*This is the Main operation */
			
	if (isset($_POST["submit"]))
		{
			$_SESSION["Previous_text"]= $_POST['texteffect'];
			//echo $text_value;
			$gujarati_value=$_POST["submit"];
			$_SESSION["Gujarati_value"]=$gujarati_value;
			//echo $gujarati_value;
			//echo "<br>";
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select English from Translator where Gujarati = '$gujarati_value' LIMIT 1";
				$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
				$value=$row[0];
					//echo $row[0];
			$_SESSION["INIT"]=$row[0];
			$_SESSION["English_value"]=$row[0];
			$_SESSION["chhe_value"]=$_SESSION["English_value"];
			//echo "English Value ".$_SESSION["English_value"];
		}
	elseif((isset($_POST["another_section"])))
		{
			$another_value=$_POST["another_section"];
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Another_part from Gujarati_part where Gujarati = '$another_value' LIMIT 1";
				$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
				$value=$row[0];
				//	echo $row[0];
					
				$_SESSION["English_value"]=$_SESSION["English_value"].$row[0];
				
			//echo "<br>".$_SESSION["English_value"];
			
			$Eng=$_SESSION["English_value"];
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Gujarati from Translator where English = '$Eng' LIMIT 1";
			$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
					
			$_SESSION["Gujarati_value"]=$row[0];
			
		}
	elseif((isset($_POST["another_section_1"])))
		{
			$length=0;
				$string = $_SESSION["English_value"];
					$arr1 = str_split($string);
					$length=strlen($string);
					$len=$length;
				//echo $length;
				$INIT_value = strlen($_SESSION["INIT"]);
				//echo $INIT_value;
				$string_value = strlen($_SESSION["English_value"]);
				//echo $_SESSION["English_value"];
				//echo "length of English_value is : ".$string_value;
				$_SESSION["PREVIOUS"]=$string_value;
				//echo $_SESSION["PREVIOUS"];
				if($_SESSION["chhe_value"] == 'chha')
					{
							$i=0;
							$new_Eng_value=null;
							while($i <= $length)
								{
									$new_Eng_value=$new_Eng_value.$arr1[$i];
									$i++;
									//echo $arr1[$i];
									$length--;
								}
					}
				elseif($_SESSION["PREVIOUS"] > 2 && $INIT_value < 3)
					{
						//echo "<br>value is grater then 2 ";
							$i=0;
							$new_Eng_value=null;
							while($i < $length-1)
								{
									$new_Eng_value=$new_Eng_value.$arr1[$i];
									$i++;
									//echo $arr1[$i];
									$length--;
								}
					}
				else
					{
						//echo "<br>value is less then 2 ";
							$i=0;
							$new_Eng_value=null;
							while($i < $length)
								{
									$new_Eng_value=$new_Eng_value.$arr1[$i];
									$i++;
									//echo $arr1[$i];
									$length--;
								}
					}
			$_SESSION["English_value"]=$new_Eng_value;
			//echo $new_Eng_value;
			$another_value=$_POST["another_section_1"];
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Another_part from Gujarati_part where Gujarati = '$another_value' LIMIT 1";
				$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
				$value=$row[0];
				//	echo $row[0];
					
				$_SESSION["English_value"]=$_SESSION["English_value"].$row[0];
				
			//echo "<br>".$_SESSION["English_value"];
			
			$Eng=$_SESSION["English_value"];
			include 'connection_php.php';
			$database="Translator";
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Gujarati from Translator where English = '$Eng' LIMIT 1";
			$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
				$Guj_string=$row[0];
			//echo "<br>Guj val : ".$_SESSION["Gujarati_value"]."<br>";
			$_SESSION["Gujarati_value"]=$Guj_string;
			//echo $_SESSION["Gujarati_value"];
		}
		elseif((isset($_POST["another_section_2"])))
		{
			$length=0;
				$string = $_SESSION["English_value"];
					$arr1 = str_split($string);
					$length=strlen($string);
					$len=$length;
				//echo $length;
				$i=0;
				$new_Eng_value=null;
				while($i < $length)
					{
						$new_Eng_value=$new_Eng_value.$arr1[$i];
						$i++;
						//echo $arr1[$i];
						$length--;
					}
					$_SESSION["English_value"]=$new_Eng_value;
					
			$another_value=$_POST["another_section_1"];
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Another_part from Gujarati_part where Gujarati = '$another_value' LIMIT 1";
				$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
				$value=$row[0];
				//	echo $row[0];
					
				$_SESSION["English_value"]=$_SESSION["English_value"].$row[0];
				
			//echo "<br>".$_SESSION["English_value"];
			
			$Eng=$_SESSION["English_value"];
			include 'connection_php.php';
			mysql_select_db($database,$connection);
			mysql_query("set names utf8");
			$sql= "select Gujarati from Translator where English = '$Eng' LIMIT 1";
			$result= mysql_query($sql);
				$row=mysql_fetch_array($result);
					
			$_SESSION["Gujarati_value"]=$row[0];
		//	echo $_SESSION["Gujarati_value"];
		}
	elseif((isset($_POST["Reset"])))
		{
			$_SESSION["Gujarati_value"]=null;
			$_SESSION["Previous_text"]=null;
		}
	elseif((isset($_POST["BackSpace"])))
		{
			$len_2 = 0;
			$length = 0;
					$_SESSION["Gujarati_value"]=null;
		
			/*		$pvi = null;
					$pvi = $_SESSION["Previous_text"];
					$arr12 = str_split($pvi);
					$length=strlen($pvi);
					$len_2=$length;
					echo $len_2;
					$i = 0;
					while($i < $len_2)
					{
						//echo $arr12[$i];
						echo "<br>hello";
						$i=$i+1;
					}*/
		}
	elseif((isset($_POST["Combination_section_1"])))
		{
			$length=0;
				$string = $_SESSION["English_value"];
			//	echo $_SESSION["English_value"]."<br>";
					$arr1 = str_split($string);
					$length=strlen($string);
					$len=$length;
				//echo $length;
				$i=0;
				$new_Eng_value=null;
				while($i < $length)
					{
						$new_Eng_value=$new_Eng_value.$arr1[$i];
						$i++;
						$length--;
					}
			//	echo $new_Eng_value;
				$_SESSION["English_value"]=$new_Eng_value;
				$Eng=$_SESSION["English_value"];
					include 'connection_php.php';
						$database="Translator";
						mysql_select_db($database,$connection);
						mysql_query("set names utf8");
						$sql= "select Gujarati from Translator where English = '$Eng' LIMIT 1";
						$result= mysql_query($sql);
						$row=mysql_fetch_array($result);
						$Guj_string=$row[0];
						//	echo "<br>Guj val : ".$_SESSION["Gujarati_value"]."<br>";
						$_SESSION["Gujarati_value"]=$Guj_string;
						//echo $_SESSION["Gujarati_value"];
		}
	header('Location: G_keyboard.php');
}
?>