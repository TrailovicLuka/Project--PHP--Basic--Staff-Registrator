<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="job";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);
if (!$conn){
	die ("Connection faild ". mysqli_error());
}


?>