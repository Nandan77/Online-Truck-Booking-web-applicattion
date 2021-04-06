<!DOCTYPE html>
<?php 
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
?>
<html>
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/ord26.css">

	<!--nav menu --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

.topnav #myLinks {
  display: none;
}

.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

.topnav a:hover {
  background-color:#ddd;
  color: black;
}

.active {
  background-color: #01011c;/*#4CAF50*/;
  color: white;
}
</style>

<body>
	<!-- Top Navigation Menu -->
			<div class="topnav">
			<a href="#home" class="active"><span style="color:#2d0785 font-text:bold">GO</span><span style="color:#f7580f ">Truck</span></a>
			<div id="myLinks">
				<a href="home.html">Home</a>
				<a href="adminlogin.php">signout</a>
			</div>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
				<i class="fa fa-bars"></i>
			</a>
		</div>

			<!-- script for navmenu -->
			<script>
			function myFunction() {
			var x = document.getElementById("myLinks");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
			}
			}
			</script>


</br>


<div class="aap">

<h1>TRUCK LIST</h1>
<br>
	<?php 
	
	
	$get_pro = "select * from truck";

	$run_pro = mysqli_query($conn, $get_pro); 
	
	$count_cats = mysqli_num_rows($run_pro);
	
	if($count_cats==0){
	
	echo "<h2>No Orders were found!</h2>";
	
	}
	echo"<table>";
    echo"<tr> <th>IMAGE</th> <th>TRUCK ID</th> <th>TYPE</th>  <th>NAME</th> <th>CAPACITY</th> <th>PRICE</th> <th>UPDATE</th> <th>DELETE</th></tr>";
	while($row_pro=mysqli_fetch_array($run_pro)){
	

	    $a = $row_pro['truck_id'];
		$b = $row_pro['type'];
		$c = $row_pro['name'];
		$d = $row_pro['capacity'];
		$e = $row_pro['price'];
		$b_img = $row_pro['Image'];
	
    
	    echo"<tr> <td><img src='$b_img' width='100' height='100' /></td> <td>$a</td> <td>$b</td> <td>$c</td>  
		     <td>$d</td> <td>$e</td> <td><a href=updatetruck.php?f_id=".$a." >update</a></td>  <td><a href=deltruck.php?f_id=".$a." >delete</a></td>";
            
			
	
	}
	?>
	
				
		
			
</div>


</body>
</html>


