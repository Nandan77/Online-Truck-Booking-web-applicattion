<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
?>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<!--table structure bootstraps-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="signup.css">
	<link rel="stylesheet" href="manda.css">
	<script src="manda.js"></script>
	<script src="pswd.js"></script>
	<script src="formValidation.js"></script>
	<script src="checkUser.js"></script>
	<script src="login.js"> </script>

	<!--nav menu --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

	<!--footer-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="footer.css">
	
	
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
					<a href="login.php">Back</a>
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
	

			<div class="container">
				<div class="page-header">
					<h2>Sign Up</h2>
					<p>Please fill in this form to create an account.</p
				</div>
				
					
				<form name="myForm" onsubmit="return validateForm()" class="form-horizontal" role="form"  method="get">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email"><span style="color:red;">*</span> Email:</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
						</div>
						<span class="error">Email is required</span>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="pwd1"><span style="color:red;">*</span> Password:</label>
						<div class="col-sm-6">
							<input type="password" class="form-control" id="pwd1" placeholder="No special characters, at least one letter, one capital letter, one number" name="pwd1">
						</div>
						<span class="error">Password is required</span>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="username"><span style="color:red;">*</span> Username:</label>
						<div class="col-sm-6">
							<input type="username" class="form-control" id="username" placeholder="only alphabetical or numeric characters" name="username">
						</div>
						<span class="error">Username is required</span>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="gender">Gender:</label>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" name="gender" value="Female">Female
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" value="Male">Male
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="tel"><span style="color:red;">*</span> Phone:</label>
						<div class="col-sm-6">
							<input type="tel" class="form-control" id="tel" placeholder="Enter Your Phone Number" name="tel">
						</div>
						<span class="error">Phone is required</span>
					</div>			
					
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-6">
							<button type="submit" class="btn btn-primary btn-block" name="signup" id="signup">Sign Up</button>
						</div>
					</div>
				</form>
				<br /><br /><br />
			</div>
			<?php
			if(isset($_GET['signup']))
			{
			  $a=$_GET['email'];
			  $b=$_GET['pwd1'];
			  $c=$_GET['username'];
			  $d=$_GET['gender'];
			  $e=$_GET['tel'];
			  
			  if($a!="" && $b!="" && $c!="" && $e!="")
			  {
			    $sql="insert into user values('$a','$b','$c','$d','$e')";
				$data=mysqli_query($conn,$sql);
				if($data)
				{
				  echo"<script type=\"text/javascript\">
				       alert(\"Inserted Successfully\");
					   window.location=(\"login.php\")
					   </script>";
				}
				else
				{
					echo"<script type=\"text/javascript\">
				       alert(\"Not Inserted\");
					   window.location=(\"signup.php\")
					   </script>";
				}
			  }
			}
			?>
			
</body>
</html>