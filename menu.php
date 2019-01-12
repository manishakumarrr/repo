
<!DOCTYPE html>
<html>  
<head>
	<link rel="stylesheet" type="text/css" href="css/style_user_home_page.css">
</head>
<body background="css/4.jpg">
<h1>Items</h1>
<div class="table1">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fame";
$con = mysqli_connect($servername, $username, $password, $dbname);
$query=mysqli_query($con,"SELECT * FROM items");
print"<table border='1' width='1000' height='200' style='margin-left: 311px;'>";
print"<tr><th>Items</th><th>COST</th><th> </th><th>ADD</th></tr>";
while($display=mysqli_fetch_array($query))
{
	print"<tr><td>".$display['name']."</td>";
	print" <td><img src=".$display['image']." alt='Random Name' style='width:100px; height:100px' /></td>";
	print"<td>".$display['cost']."</td>";
	print"<td><a href='cart.php?fp=".$display['cost']."'>Add to cart</a></td></tr>";
}
print"</table>";
mysqli_close($con);
?>
</div>

</body>
</html>
