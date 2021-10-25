<?php
require("connect.php");
if(isset($_GET['criteria'])){
	if(!empty($_GET['criteria'])){
		$criteria=trim($_GET['criteria']);
		$criteria=mysqli_real_escape_string($conn,$criteria);
		$query="SELECT * FROM staff WHERE Fname LIKE '%{$criteria}%' OR Lname LIKE '%{$criteria}%' OR Adress LIKE '%{$criteria}%' ";
		$result=mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_assoc($result)){
					?>
					<div id="result">	
						
						<p><b>Name: </b> <?php echo $row['Fname']; ?> </p>
						<p><b>Last Name: </b> <?php echo $row['Lname']; ?> </p>
					<p><b>Adress: </b> <?php echo $row['Adress']; ?> </p>
					<p><b>Number: </b> <?php echo $row['Phone']; ?> </p>
					<p><b>Position: </b> <?php echo $row['Position']; ?> </p>

						
						</div>
						
						<?php
				}
				echo "Broj nadjenih je: " . mysqli_num_rows($result);
			}else{
				echo"No result found";
			}
	}else{
		echo "Can't be blanc!";
	}
}



?>