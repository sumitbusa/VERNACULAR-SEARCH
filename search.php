<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');
?>
<?php
	if(!isset($_SESSION["Login_Status"]))
		{
			if($_SESSION["Login_Status"]==null)
						header('Location: index.php');
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<link rel="stylesheet" type="text/css" href="css/searchlayout.css">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Hello World - Google  Web Search API Sample</title>
    <script src="https://www.google.com/jsapi" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<!
    google.load('search', '1');

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
      var localSearch = new google.search.LocalSearch();
    //  searchControl.addSearcher(localSearch);
      searchControl.addSearcher(new google.search.WebSearch());
    //  searchControl.addSearcher(new google.search.VideoSearch());
    //  searchControl.addSearcher(new google.search.BlogSearch());
     // searchControl.addSearcher(new google.search.NewsSearch());
    //  searchControl.addSearcher(new google.search.ImageSearch());
    //  searchControl.addSearcher(new google.search.BookSearch());
    //  searchControl.addSearcher(new google.search.PatentSearch());

    

      // tell the searcher to draw itself and tell it where to attach
        searchControl.draw(document.getElementById("searchcontrol"));
		
      // execute an inital search
      searchControl.execute("Sun");
    }
    google.setOnLoadCallback(OnLoad);
	// establish a keep callback
	searchControl.setOnKeepCallback(this, MyKeepHandler);

function MyKeepHandler(result) {
  // clone the result html node
  var node = result.html.cloneNode(true);
  node.draw(document.getElementById("test"));
  node =document.getElementById("test");
 document.write(node);
  // attach it
 /* var savedResults = document.getElementById("searchcontrol");
 // savedResults.appendChild(node);
 document.write(savedResults);*/
}
    //]]>
    </script>
  </head>
  <body>
  <?php
		if($_SESSION["User_name"]==null)
				include 'Header.php';
		else
			include 'header_with_sign_out.php';
	?>
    <div id="searchcontrol">
	Loading
	</div>
  </body>
</html>