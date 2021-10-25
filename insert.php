<DOCTYPE!>
<html>
<head>
<meta charset UTF-8>
<title> Add Stuff </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="firstD">
		<div id="secondD">
		<a href="index.php" ><img src="img/search.png" title="Search staff"></a>
		<a href="Remove.php" ><img src="img/Delete.png" title="Remove staff" ></a>
		
		
		<form action="#" method="POST">
		<input type="text" placeholder="Name" name="Name"> <br>
		<input type="text" placeholder="Last name" name="Lname"><br>
		<input type="text" placeholder="Adress" name="Adress"><br>
		<input type="text" placeholder="Phone Number" name="PhoneNumber"><br>
		<input type="text" name="Position" placeholder="Position"><br>
		<input type="submit" name="Add" value="Add">
		</form>

		</div>
		<div id="message">
		<?php
		if(isset($_POST['Add'])){
			if(isset($_POST['Name'])&& isset($_POST['Lname']) && isset($_POST['Adress']) && isset($_POST['PhoneNumber']) && isset($_POST['Position'])){
				if(!empty($_POST['Name'])&& !empty($_POST['Lname']) && !empty($_POST['Adress']) && !empty($_POST['PhoneNumber']) && !empty($_POST['Position'])){
						$name = trim($_POST['Name']);
				$lname = trim($_POST['Lname']);
			$adress = trim($_POST['Adress']);	
			$number = trim($_POST['PhoneNumber']);
			$position=trim($_POST['Position']);
			require('inc/connect.php');
			$name = mysqli_real_escape_string($conn,$name);
			$lname = mysqli_real_escape_string($conn,$lname);
			$adress=mysqli_real_escape_string($conn,$adress);
			$number= mysqli_real_escape_string($conn,$number);
			$position=mysqli_real_escape_string($conn,$position);
				$query = "INSERT INTO staff (Fname,Lname,Adress,Phone,Position) VALUES ('$name','$lname','$adress',$number,'$position')";
				if(mysqli_query($conn,$query) === TRUE){
					echo "Inserted in database successfull! ";
				}else {
					echo"Try again something goes wrong!";
					}
				}else{
					echo"All fields must be filled";
				}
			}else{
				echo"All parametars must be send!";
			}
		}
		
	?>
	</div>
	
	
	
	
	
	
</div>
</body>






</html>