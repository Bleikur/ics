<!DOCTYPE HTML>

<html>
  <script
		src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous">
	</script>
  <script> 
    $(function(){
      $("#header").load("header.html"); 
      $("#footer").load("footer.html"); 
    });
  </script>

  <link rel="stylesheet" type="text/css" href="style.css"/>

  <head>
    <title>ReChord</title>
  </head>

  <div id="header"></div>

    <body>
		<p>this page will return entries in the database that match your query:</p>
    </body>

  <div id="footer"></div>

  <?php
	$query = $_GET["searchText"];
	echo $query;
  ?>
</html>