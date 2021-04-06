
<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
session_start();
$bb=$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--table structure bootstraps-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="table.css">
	<script src="jump.js"> </script>
	
	
		<!--footer structure-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="footer.css">

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
<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!-- Top Navigation Menu -->
<div class="topnav">
<a href="#home" class="active"><span style="color:#2d0785 font-text:bold">GO</span><span style="color:#f7580f ">Truck</span></a>
  <div id="myLinks">
    <a href="home.html">Home</a>
    <a href="login.php">signout</a>
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
	


	<div class="container" id="homepage">
		<h1><b>Post your load details</b></h1>
		<div class="btn-group btn-group-justified">			
			<div class="btn-group">
				<button id="button1" type="button" href="#oneway" name="fullload" class="btn btn-primary">Full-Load</button>
			</div>
			<div class="btn-group">
				<button id="button2" type="button" href="#roundtrip" name="halfload" class="btn btn-primary">Half-Load</button>
			</div>
		</div>
		<div id="Full-Load">
			<form role="form"  method="get">
			
			  <div class="row">
			  <hr>
				<div class="col-sm-6">
					<label for="from">From:</label>
					<input type="text" class="form-control" id="from" name="from" placeholder="City or Code" required>
				</div>
				
				<div class="col-sm-6">
					<label for="to">Destination:</label>
					<input type="text" class="form-control" id="to" name="dest" placeholder="City or Code" required>
				</div>
				
				<div class="col-sm-6">
				<hr>
					<label for="to">Source PinCode:</label>
					<input type="text" class="form-control" id="to" name="spin" placeholder="From PinCode" required>
				</div>
				
				<div class="col-sm-6">
				<hr>
					<label for="to">Destination PinCode:</label>
					<input type="text" class="form-control" id="to" name="dpin" placeholder="Destination PinCode" required>
				</div>
			  </div>
			  <hr >
			   <div class="row">
				  <div class="col-sm-6">
					<label for="depart">Depart:</label>
					<input type="date" class="form-control" id="depart" name="depart" required>
				  </div>
				   <div class="col-sm-6">
						
						<label for="to">Approximate_dist:</label>
						<input type="text" class="form-control" id="to" name="distance1" placeholder="Aprox_dist in KM" required>
					</div>
			  </div>  
			  
			   <div class="row">
				   <hr >
				  <div class="col-sm-6">
						<label for="class">Materials:</label>
						<select class="form-control" name="Materials">
						<option value="Select">Select</option>
						<option value="Autoparts">Autoparts</option>
						<option value="Building Materials">Building Materials</option>   
						<option value="Chemilcals">Chemilcals</option>   
						<option value="Cement">Cement</option>   
						<option value="Fruits And Vegetables">Fruits And Vegetables</option>   
						<option value="Fertilizers">Fertilizers</option>   
						<option value="House Hold Goods">House Hold Goods</option>   
						<option value="Industrial Equipments">Industrial Equipments</option>   
						<option value="Medicine">Medicine</option>  
						<option value="Others">Others</option>   			  
						</select>
			  <hr>
					
				</div> 
			  </div> 
			  
			  <br>
			  <div class="btn-group btn-group-justified">	
					<div class="btn-group">
						<button type="submit" name="submit" class="btn btn-success">Submit</button>
					</div>
					<div class="btn-group">
						<button type="reset" name="reset"  class="btn btn-info" value="Reset">Reset</button>
					</div>
			  </div>
			</form>
	</div>
	<?php
			if(isset($_GET['submit']))
			{
				
			
					
			  $a=$_GET['from'];
			  $b=$_GET['dest'];
			  $c=$_GET['spin'];
			  $d=$_GET['dpin'];
			  $e=$_GET['depart'];
			  $g=$_GET['Materials'];
			  $h=$_GET['distance1'];
			  $z="full load";
			  if($a!="" && $b!="")
			  {
			    $sql="INSERT INTO `load details` (`load_id`, `user`, `load_type`, `src`, `dest`, `src_pin`, `dest_pin`, `depart`, `materials`, `approx_dist`) VALUES (NULL, '$bb', '$z', '$a', '$b', '$c', '$d', '$e', '$g', '$h')";
				$data=mysqli_query($conn,$sql);
				
				
				
				if($data)
				{
					$farmer_to_edit = mysqli_query($conn,"SELECT MAX(load_id) FROM `load details`");
                    $row = mysqli_fetch_array($farmer_to_edit);
				    $wb=$row[0];
				  echo"<script type=\"text/javascript\">
				       alert(\"Inserted Successfully\");
					   window.location=(\"trucksel.php?l_id=".$wb."&p_id=".$h."  \")
					   </script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Not Inserted\");
					   window.location=(\"table.php\")
					   </script>";
				}
			  }
			  
			}
			?>


		<div id="Half-Load">
			<form role="form"  method="get">
					<div class="row"> 
					<hr>
						<div class="col-sm-6">
						<label for="from">From:</label>
						<input type="text" class="form-control" id="from" name="from1" placeholder="Code " required>
					</div>
					
					<div class="col-sm-6">
							<label for="to">Destination:</label>
							<input type="text" class="form-control" id="to" name="dest1" placeholder="Code" required>
					</div>
				  
					<div class="col-sm-6">
						<hr>
						<label for="to">Source PinCode:</label>
						<input type="text" class="form-control" id="to" name="spin1" placeholder="From PinCode" required>
					</div>
				
					<div class="col-sm-6">
						<hr>
						<label for="to">Destination PinCode:</label>
						<input type="text" class="form-control" id="to" name="dpin1" placeholder="Destination PinCode" required>
					</div>
				
					<div class="row"> 						
						<div class="col-sm-6">
						<hr>
							<label for="depart">Depart:</label>
							<input type="date" class="form-control" id="depart" placeholder="Depart" name="depart1" required>
						</div>  
						<div class="col-sm-6">
						<hr>
							<label for="to">Approximate_dist:</label>
							<input type="text" class="form-control" id="to" name="distance" placeholder="Aprox_dist in KM" required>
					</div>
					</div>
					
				 
					<hr >
				 
					<div class="row">   
						<div class="col-sm-6">
							<label for="class">Pick Up Type:</label>
							<select class="form-control" name="Pickup1">
							<option value="Select">Select</option>
							<option value="Bike Delivery">Bike Delivery</option>
							<option value="Business">Door To Door Delivery</option>   
							<option value="Hostel/PG To Home ">Hostel/PG To Home</option>
					  		<option value="General">General</option>
							</select>
						</div> 
					</div>
					<div class="btn-group btn-group-justified">	
						<div class="btn-group">
						<hr>
							<button type="submit" name="submit1" class="btn btn-success">Submit</button>
						</div>
						<div class="btn-group">
						<hr>
							<button type="reset" name="reset1" class="btn btn-info" value="Reset">Reset</button>
						</div>
					</div>
			</form>
		</div>
	</div>
	<?php
			if(isset($_GET['submit1']))
			{
			  $av=$_GET['from1'];
			  $bv=$_GET['dest1'];
			  $cv=$_GET['spin1'];
			  $dv=$_GET['dpin1'];
			  $ev=$_GET['depart1'];
			  $gv=$_GET['Pickup1'];
			  $hv=$_GET['distance'];
			  $x="half load";
			  
			  if($av!="" && $bv!="")
			  {
			    $sql="INSERT INTO `load details` (`load_id`, `user`, `load_type`, `src`, `dest`, `src_pin`, `dest_pin`, `depart`, `materials`, `approx_dist`) VALUES (NULL, '$bb', '$x', '$av', '$bv', '$cv', '$dv', '$ev', '$gv', '$hv')";
				$data=mysqli_query($conn,$sql);
				
				
				if($data)
				{
					$farmer_to_edit1 = mysqli_query($conn,"SELECT MAX(load_id) FROM `load details`");
                    $row1 = mysqli_fetch_array($farmer_to_edit1);
				    $wc=$row1[0];
				  echo"<script type=\"text/javascript\">
				       alert(\"Inserted Successfully\");
					   window.location=(\"trucksel.php?l_id=".$wc."&p_id=".$hv." \")
					   </script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Not Inserted\");
					   window.location=(\"table.php\")
					   </script>";
				}
			  }
			    
			}
			?>
	
			<footer class="container-fluid text-center">
				<a href="#signUpPage" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
				</a>
				<p>GO Truck</p>		
			</footer>
			
		
		
	 </body>
		

	</html>