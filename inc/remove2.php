<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	require('connect.php');
	$query="DELETE FROM staff WHERE id={$id}";
	mysqli_query($conn,$query);
	header("Location: ../remove.php");
}
?>	

