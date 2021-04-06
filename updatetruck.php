
<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GO Truck</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="forcompany.css">
	<link rel="stylesheet" href="AdminSignin.css">
	<script  src="jquery-1.9.1.min.js"></script>
	<script src="Admin.js"></script>
	
	<!--nav menu --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<?php
$f_id = (int) $_GET['f_id']; 
    $farmer_to_edit = mysqli_query($conn,"SELECT * FROM truck WHERE truck_id =".  stripslashes($f_id) );
    $row = mysqli_fetch_array($farmer_to_edit);
?>

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
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
	<div class="container">
	</br>
		<hr />
		<div id = "Add">
		<form class="form-horizontal" method="get" role="form" id="addf">
		<div class="form-group">
				<label class="control-label col-sm-2" for="type">truck_id</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="truck_id" placeholder="" name="truck_id" required="required" value='<?php echo stripslashes($row[1]) ?>' >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="type">Type</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="type2" placeholder="" name="type" required="required" value='<?php echo stripslashes($row[1]) ?>' >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name</label>
				<div class="col-sm-6">
					<input type="name" class="form-control" id="name2" placeholder="" name="name" required="required" value='<?php echo stripslashes($row[2]) ?>' >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="capacity">Capacity</label>
				<div class="col-sm-6">
					<input type="capacity" class="form-control" id="capacity2" placeholder="" name="capacity" required="required" value='<?php echo stripslashes($row[3]) ?>' >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price">Price</label>
				<div class="col-sm-6">
					<input type="price" class="form-control" id="price2" placeholder="" name="price" required="required"value='<?php echo stripslashes($row[4]) ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="image">Image</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="image2" placeholder="" name="image" required="required" value='<?php echo stripslashes($row[5]) ?>'>
				</div>
			</div>
			<br />
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<button type="submit" name="submit" class="btn btn-success">Update</button>
				</div>
			</div>
		</form>
		</div>
	</div>	
	<?php
	if(isset($_GET['submit']))
			{
					  $a=$_GET['truck_id'];
					  $e=$_GET['type'];
					  $c=$_GET['name'];
					  $d=$_GET['capacity'];
					  $e=$_GET['price'];
					  $g=$_GET['image'];
	           if($e!="" && $c!="")
			  {
			    $sql="update truck set truck_id='$a',type='$e',name='$c',capacity='$d',price='$e',Image='$g' where truck_id=$a";
				$data=mysqli_query($conn,$sql);
				if($data)
				{
				  echo"<script type=\"text/javascript\">
				       alert(\"Updated Successfully\");
					   window.location=(\"trucklist.php\")
					   </script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Not Updated\");
					   window.location=(\"trucklist.php\")
					   </script>";
				}
			  }
			}
		?>
	
</body>
</html>