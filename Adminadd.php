<?php
if(isset($_GET['Add']))
{
$a=$_GET['truck_id'];
$b=$_GET['type'];
$c=$_GET['name'];
$d=$_GET['capacity'];
$e=$_GET['price'];
$g=$_GET['image'];
include_once 'dbconnect.php';
$sql = $sql="INSERT INTO `truck` (`truck_id`, `type`, `name`, `capacity`, `price`, `image`) VALUES (NULL, '$bb','$a', '$b', '$c', '$d', '$e', '$g')";
if(! mysqli_query($conn, $sql))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
}
echo 0;

mysqli_close($conn);

?>