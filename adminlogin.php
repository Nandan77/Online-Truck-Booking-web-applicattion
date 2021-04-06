
<?php
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" type="text/css" href="home.css"></link>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="footer.css">
	
 </head>
  <body>
  
	<div class="wrapper">
			<nav class="navbar">	   
					<a class="active" href="home.html">Home</a>
					<a href="about.html">About</a>
					<a href="about.html">Services</a>
					<a href="contact.html">Contact</a>
					<div class="dropdown">
						<button class="dropbtn">Login<i class="fa fa-caret-down"></i></button>									
						<div class="dropdown-content">
						 <a href="adminlogin.php">Admin</a>
						 <a href="login.php">User</a>	
					</div>						 
			</nav>
	
			<div class="login">
				<div class="form">
					<form class="login-form"  method="get">
						<h1 align="center" >Admin Login</<h1>
						<div>
							<input type="username" name="username" placeholder="Username"/>
						</div>
						<div>
							<input type="password" name="password" placeholder="Password"/>
						</div>
						<button type="submit" name="submit">Login</button>
						
					</form>
				</div>
			</div>
		
	</div>
		<?php
			if(isset($_GET['submit']))
			{
			  $a=$_GET['username'];
			  $b=$_GET['password'];
			 
			  
			  if($a!="" && $b!="")
			  {
			    $sql="select username,password from admin where username='$a' and password='$b'";
				$data=mysqli_query($conn,$sql);
				if($data)
				{
				  echo"<script type=\"text/javascript\">
				       alert(\"Login Successfully\");
					   window.location=(\"Adminpage.php\")
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
			</br>
			<footer class="footer-distributed">
 
			<div class="footer-left">
 
				<h3>GoTruck</h3>
 
					<p class="footer-links">
					<a href="home.html">Home</a>
	
					<a href="#">Services</a>
	
					<a href="#">About</a>
		
					<a href="contact.html">Contact</a>
					</p>
 
					<p class="footer-company-name">webdevtrick &copy; 2020</p>
			</div>
 
			<div class="footer-center">
 
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Karnataka, India</p>
				</div>
 
				<div>
						<i class="fa fa-phone"></i>
						<p>+91 8431024408</p>
				</div>
	
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">contact@GoTruck.com</a></p>
				</div>
 
			</div>
 
			<div class="footer-right">
 
				<p class="footer-company-about">
					<span>About the company</span>
					Web Dev Trick is a blog for web designers, graphic designers, web developers &amp; SEO Learner.
				</p>
 
				<div class="footer-icons">
 
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-github"></i></a>
 
				</div>
 
			</div>
  </body>
</html>
