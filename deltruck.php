<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");

$sql="DELETE FROM truck WHERE truck_id='$_GET[f_id]'";
if(mysqli_query($conn,$sql)){
	echo"<script type=\"text/javascript\">
				       alert(\"Deleteed Successfully\");
					   window.location=(\"trucklist.php\")
					   </script>";
}
else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Can't Delete\");
					   window.location=(\"trucklist.php\")
					   </script>";
				}
?>


</body>
</html>