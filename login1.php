<?php
error_reporting(0);
include "login_form.html";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{ 
$un=$_POST['uname'];
$pw=$_POST['pword'];
$query=mysqli_query($con,"SELECT * from login WHERE password='$pw' AND username='$un'");
$rows=mysqli_num_rows($query);
if($rows>=1)
{
header("Location:menu.php");
}
else
{
die("login unsuccessful");
}
}
mysqli_close($con);
?>