<?php
error_reporting(0);
/*include "reg.html";*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	   die('Invalid query: ' . mysqli_connect_error());
}

$name=$_POST["sname"];
$add=$_POST["address"];
$ph=$_POST["phone"];
$pword=$_POST["pass1"];
$query="INSERT INTO registration(name,address,phone) VALUES ('$name','$add','$ph')";
$result = mysqli_query($conn, $query);
if(!$result) {
	printf("Error: %s\n", mysqli_error($conn));
	die('Error');
	return;
}
$query1="INSERT INTO login( username,password) VALUES ('$name','$pword')";
$result = mysqli_query($conn, $query1);
if(!$result) {
	printf("Error: %s\n", mysqli_error($conn));
	die('Error');
	return;
}



header("Location:home.html");

mysqli_close($conn);
?>