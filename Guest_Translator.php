<?php
	session_start();
		if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Guest"] != 1)
					header('Location: Home_page.php');
		}
	$_SESSION["Eng_input_for_api"]=null;
	$_SESSION["Eng_input_for_api"]=$_POST["Eng_input"];
	$_SESSION["Eng_input_for_api_pass_Translator"]=$_POST["Eng_input"];
	//echo $_SESSION["Eng_input_for_api"];
//	echo $_SESSION["Eng_input_for_api_pass_Translator"];
//	header('Location: Translator.php')
?>
<?php
	$_SESSION["string"]=null;
	$_SESSION["Eng_input_1"]=null;
	header('Content-Type: text/html; charset=utf-8');
	//if(isset($_SESSION["Eng_input_for_api"]))
	//{
		$string = $_POST["Eng_input"];	//get the value from Translator.
		$_SESSION["Eng_input_1"]=$string;
		//echo $string." hello";
		$temp = $string;	//store the value of string in Temporary for operation.
		$_SESSION["string_1"]=null;
		$length = strlen($string);	//store the length of string
		$j=0;
		$k=1;
		$status=0;
		$length_change = 0;
		while($j < 800)
			{
				$verify_return = verify($temp);
			
				if($verify_return != null)
					{
					//	echo "<br>Data is found : ";
						if($status == 1)
							{
							//	echo $k;
							//	echo $length;
							//	$length_change=($length - $k)+1;
							/*	for($m = 0 ;$m < $len; $m++)
										{
											if($m < $k)
											$temp_3 = $temp_3.$arr3[$m];
										//echo $temp_2;
										}
								echo $temp_3;*/
								
								$arr2 = str_split($string);
								$len=strlen($string);
								$temp_2=null;
					//			echo $k;
					//			echo $length;
								$length_change=$length_change+($length - $k)+1;
								for($m = $length_change ;$m < $length; $m++)
									{
										$temp_2 = $temp_2.$arr2[$m];
										//echo $temp_2;
									}
									$temp=$temp_2;
					//			echo "After changing string : ".$temp_2."<br>";
								$k=0;
							}
						else
								break;
					}
				else	
					{
						$temp_1=$temp;
				//		echo "<br>Null ";
						$arr1 = str_split($temp_1);
						$len=strlen($temp_1);
						$temp_1=null;
						$i=0;
							while($i < $length-$k)
								{
									//echo $arr1[$i];
									$temp_1=$temp_1.$arr1[$i];
									$i++;
									//$length--;
								}
							$temp=$temp_1;
					//		echo "<br>string : ".$temp;
							$k++;
							//echo "k : ".$k;
							$status=1;
					}
				$j++;
			}
		if($_SESSION["string_1"] == null)
			$_SESSION["string_1"] = $_SESSION["Eng_input_for_api"];
	/*		echo "String : ".$_SESSION["string_1"];
		echo "Session : ".$_SESSION["Eng_input_for_api"]." ";
		echo "session 2 ".$_SESSION["Eng_input_for_api_pass_Translator"];*/
	//}
//	echo $_SESSION["string"];
	// Function For connecting the database
	function verify($temp)
		{
			require 'connection_php.php';	//Import connection_php.php for connection mysql with out program. It's user define file.
			 
			mysql_select_db($database,$connection);		//Connect with database
			mysql_query("set names utf8");		//set character set because we fetch Gujarati keyword.
			$sql= "select Gujarati from Translator where English = '$temp' LIMIT 1";
			$result= mysql_query($sql);		//Execute the given query.
			$row=mysql_fetch_array($result);	//Fetch the Gujarati Translator word form Database
			$value=$row[0];	

			if($value == True)	//Check whether Data is available.
				{
					$_SESSION["string_1"] = $_SESSION["string_1"].$value;	// store Gujarati value in session.
					return $value;
				}
			return null;
		}
	//Function for minus one character
	function minus_character($temp,$j)
		{
			$arr1 = str_split($temp);
			$length=strlen($temp);
			$len=$length;
			$string=null;
		//	echo "<br>minus_character_length : ".$length;
				if($length > 1)
					{
						$i=0;
						while($i < $length - $j)
							{
								//echo $arr1[$i];
								$string=$string.$arr1[$i];
								$i++;
								//$length--;
							}
			//			echo "<br>Minus : ".$length;
					}
				else if($len == 1)
					{
					//	echo "Error";
						return $temp;
					}
					//	return $temp;
				return $string;
		}
	//Function for store minus character in temp variable.
	function change_string($string , $i, $length_i,$temp)
		{
			$arr1 = str_split($string);
			$len=strlen($string);
			$temp=null;
			$error=1;
		//	echo "<br>length_i_1 ".$length_i;
		//	echo "<br>length : ".$len;
				if($length_i > 0)
					{
						for($k = $length_i ;$k < $len; $k++)
							{
								$temp_1 = $temp_1.$arr1[$k];
							}
					//	echo "After changing string : ".$temp_1."<br>";
						return $temp_1;
					}
				else
					return $error;
		}
	header('Location: Guest_new_3.php')
?>