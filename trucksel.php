<?php 
  $conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
	session_start();
	$bb=$_SESSION['user'];
	
	$f_id = $_GET['l_id'];
	$pd = $_GET['p_id'];
?>

<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--nav menu --->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

			<!-- NAv style-->
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

			<!--portfolio style -->   
			<style>
			* {
			  box-sizing: border-box;
			}

			body {
			  background-color: #f1f1f1;
			  padding: 20px;
			  font-family: Arial;
			}

			/* Center website */
			.main {
			  max-width: 1000px;
			  margin: auto;
			}

			h1 {
			  font-size: 50px;
			  word-break: break-all;
			}

			.row {
			  margin: 10px -16px;
			}

			/* Add padding BETWEEN each column */
			.row,
			.row > .column {
			  padding: 8px;
			}

			/* Create three equal columns that floats next to each other */
			.column {
			  float: left;
			  width: 33.33%;
			  display: none; /* Hide all elements by default */
			}

			/* Clear floats after rows */ 
			.row:after {
			  content: "";
			  display: table;
			  clear: both;
			}

			/* Content */
			.content {
			  background-color: white;
			  padding: 10px;
			}

			/* The "show" class is added to the filtered elements */
			.show {
			  display: block;
			}

			/* Style the buttons */
			.btn {
			  border: none;
			  outline: none;
			  padding: 12px 16px;
			  background-color: white;
			  cursor: pointer;
			}

			.btn:hover {
			  background-color: #ddd;
			}

			.btn.active {
			  background-color: #666;
			  color: white;
			}
			</style>
</head>

<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		<!-- Top Navigation Menu -->
		<div class="topnav">
			<a href="#home" class="active"><span style="color:#2d0785 font-text:bold">GO</span><span style="color:#f7580f ">Truck</span></a>
			
				<div id="myLinks">
					<a href="home.html">Home</a>
					<a href="table.php">Back</a>
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
 


		<!-- MAIN (Center website) -->
		<div class="main">

				<h1>GOTRUCK.COM</h1>
				<hr>

				<h2>SELECT YOUR BEST</h2>

				<div id="myBtnContainer">
				  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
				  <button class="btn" onclick="filterSelection('STruck')"> STruck</button>
				  <button class="btn" onclick="filterSelection('Containers')"> Containers</button>
				  <button class="btn" onclick="filterSelection('Others')"> Others</button>
		</div>


			<?php 
				
				
				$get_pro = "select * from truck";

				$run_pro = mysqli_query($conn, $get_pro); 
				
				while($row_pro=mysqli_fetch_array($run_pro)){
				
					$a = $row_pro['truck_id'];
					$b= $row_pro['type'];
					$c = $row_pro['name'];
					$d= $row_pro['capacity'];
					$e= $row_pro['price'];
					$f= $row_pro['Image'];
					
					$cost=$e * $pd;
				
					echo "
							<div class='row'>
							<div class='column  $b'>
							<div class='content'>
							
								<h3>$c</h3>
								<img src='$f' width='180' height='180' />
								
								<p><b> Price per km: </b> $e </p>
								<p><b> Total Price: </b> $cost </p>
								<a href='truckbook.php?b_id=".$f_id."&c_id=".$a."&cost=".$cost."'>Book now</a>
								<br><br>
								
							</div>
							</div>
							</div>
					
					
					";
				
				}
				?>
	

			<!-- END MAIN -->
		</div>

			<script>
			filterSelection("all")
			function filterSelection(c) {
			  var x, i;
			  x = document.getElementsByClassName("column");
			  if (c == "all") c = "";
			  for (i = 0; i < x.length; i++) {
				w3RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
			  }
			}

			function w3AddClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
			  }
			}

			function w3RemoveClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
				  arr1.splice(arr1.indexOf(arr2[i]), 1);     
				}
			  }
			  element.className = arr1.join(" ");
			}


			// Add active class to the current button (highlight it)
			var btnContainer = document.getElementById("myBtnContainer");
			var btns = btnContainer.getElementsByClassName("btn");
			for (var i = 0; i < btns.length; i++) {
			  btns[i].addEventListener("click", function(){
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			  });
			}
		</script>

</body>
</html>
