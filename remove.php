
<html>
<head>
<meta charset UTF-8>
<title> Remove stuff </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="firstD">
		<div id="secondD">
		<a href="index.php" ><img src="img/search.png" title="Search staff"></a>
		<a href="insert.php" ><img src="img/add.png" title="Add staff" ></a>
		
		
		
		</div>
	<?php
	require('inc/connect.php');
	$query="SELECT * FROM staff";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
					?>
				
				<div id="result">
				
				<a href="inc/remove2.php?id=<?php echo $row['Id'] ?>"> <img src="img/delete.png"> </a>
				<p><b>Name: </b> <?php echo $row['Fname']; ?> </p>
				<p><b>Last Name: </b> <?php echo $row['Lname']; ?> </p>
				<p><b>Adress: </b> <?php echo $row['Adress']; ?> </p>
				<p><b>Number: </b> <?php echo $row['Phone']; ?> </p>
				<p><b>Position: </b> <?php echo $row['Position']; ?> </p>
				
				
				
				</div>
				
				<?php
		}
	}
	
	
	?>
	
	
	
	
	
	
</div>
</body>






</html>