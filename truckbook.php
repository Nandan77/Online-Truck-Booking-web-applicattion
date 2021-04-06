<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
session_start();
$bb=$_SESSION['user'];
$e= $_GET['cost'];
$f= $_GET['b_id'];
$g= $_GET['c_id'];
echo $bb;
echo $g;
echo $f;


$sql="INSERT INTO `book` (`b_id`, `t_id`, `b_price`) VALUES ('$f', '$g', '$e');";
if(mysqli_query($conn,$sql)){
	echo"<script type=\"text/javascript\">
				       alert(\"Inserted Successfully\");
					   window.location=(\"booking.php\")
					   </script>";
}
else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Can't Insert\");
					   window.location=(\"table.php\")
					   </script>";
				}
?>


</body>
</html>