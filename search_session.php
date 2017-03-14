<?php
	session_start();
		if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]==null)
					header('Location: index.php');
		}
/*	$_SESSION["value"]=NULL;
	
	header('Content-Type: text/html; charset=utf-8');
	if($_POST["submit"] == "English_meaning1")
	{
		$_SESSION["value"] = $_POST["English_meaning1"];
		//echo $_POST["Gu_input"];
	}
	else if($_POST["submit"] == "English_meaning2")
	{
		$_SESSION["value"] = $_POST["English_meaning2"];
		//echo $_SESSION["value"];
	}
	else if($_POST["submit"] == "English_meaning3")
	{
		$_SESSION["value"] = $_POST["English_meaning3"];
		//echo $_SESSION["value"];
	}*/
	//header('Location: session.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<link rel="icon" href="The-Logo.png">
	<link rel="stylesheet" type="text/css" href="css/searchlayout.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<!
    google.load('search', '1');

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
   //   var localSearch = new google.search.LocalSearch();
    //  searchControl.addSearcher(localSearch);
      searchControl.addSearcher(new google.search.WebSearch());
    //  searchControl.addSearcher(new google.search.VideoSearch());
    //  searchControl.addSearcher(new google.search.BlogSearch());
     // searchControl.addSearcher(new google.search.NewsSearch());
    //  searchControl.addSearcher(new google.search.ImageSearch());
    //  searchControl.addSearcher(new google.search.BookSearch());
    //  searchControl.addSearcher(new google.search.PatentSearch());

      // Set the Local Search center point
    //  localSearch.setCenterPoint("New York, NY");

      // tell the searcher to draw itself and tell it where to attach
        searchControl.draw(document.getElementById("searchcontrol"));

      // execute an inital search
      searchControl.execute("<?php if(isset($_SESSION["search_value"])){echo $_SESSION["search_value"];}?>");
    }
    google.setOnLoadCallback(OnLoad);
	// establish a keep callback
	searchControl.setOnKeepCallback(this, MyKeepHandler);

function MyKeepHandler(result) {
  // clone the result html node
  var node = result.html.cloneNode(true);

  // attach it
  var savedResults = document.getElementById("searchcontrol");
 // savedResults.appendChild(node);
 document.write(savedResults);
}
    //]]>
    </script>
  </head>
  <body>
  <?php
	//	if($_SESSION["User_name"]==null)
				include 'header_page_for_search.php';
		//else
		//	include 'header_page.php';
		if(!isset($_SESSION["G_keyboard_value_no"]))
		{
	?>
	 <p style="float:left;margin-top:30px;margin-left:700px;">Given English Input is : <font color="orange"><?php if(isset($_SESSION["English_value_for_Display"])){ echo $_SESSION["English_value_for_Display"];}?> &raquo;</font> </p><br>
	 <p style="float:left;margin-left:10px;margin-top:10px;">After Translator  : <font color="orange"><?php echo $_SESSION["values"];?> &raquo;</font></p>
	 <p style="float:left;margin-left:10px;margin-top:10px;">Translation  : <font color="orange"><?php if(isset($_SESSION["search_value"])){echo $_SESSION["search_value"];}?> &raquo;</font></p>
	 <?php
		}
		else
		{
			$_SESSION["G_keyboard_value_no"] = 0;
	?>
	 <p style="float:left;margin-left:700px;margin-top:10px;">Gujarati Input  : <font color="orange"><?php echo $_SESSION["values"];?> &raquo;</font></p>
	 <p style="float:left;margin-left:10px;margin-top:10px;"">Translation  : <font color="orange"><?php if(isset($_SESSION["search_value"])){echo $_SESSION["search_value"];}?> &raquo;</font></p>
	<?php
		}
	 ?>
    <div id="searchcontrol">Loading</div>
	<form method="post" action="options.php">
		<button type="submit" class="btn btn-success" style="margin-left:30px;">Search New Word</button>
	</form>
	 <hr>

      <footer style="float:left;left:120px;margin-left:15%;">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&copy; 2015 Project Under Shri Bhagubhai Mafatlal Polytechnic , Inc. &middot;</p>
      </footer>
  </body>
</html>