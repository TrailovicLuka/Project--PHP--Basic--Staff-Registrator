<!DOCTYPE>
<html>
<head>
<meta charset UTF-8>
<title> Staff list </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="firstD">
		<div id="secondD">
		<a href="Insert.php" ><img src="img/Add.png" title="Add staff"></a>
		<a href="remove.php" ><img src="img/Delete.png" title="Remove staff" ></a>
		
		
		<form action="#" method="GET">
		<input type="text" placeholder="Enter Name or Last Name" name="criteria">
		<input type="submit"  value="Search">
		</form>

		</div>
	<?php
	include("inc/result.php")
	
	?>
	
	
	
	
	
	
</div>
</body>






</html>