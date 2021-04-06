<!DOCTYPE html>
<?php 
$conn=mysqli_connect("localhost","root","","truck")or die("Can't connect..");
session_start();
$bb=$_SESSION['user'];
?>
<html>
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/ord31.css">

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
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}
</style>

<body id="signUpPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active">Truck Details</a>
  <div id="myLinks">
    <a href="table.php">Back</a>
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

<!-- trck list -->
<div class="aap">

    <h1>BOOKING DETAILS</h1>
    <br>
      <?php 
	
	
          $get_pro = "SELECT * FROM `load details`,book,truck where user='$bb' and load_id=b_id and truck_id=t_id";

          $run_pro = mysqli_query($conn, $get_pro); 
          
          $count_cats = mysqli_num_rows($run_pro);
          
          if($count_cats==0){
          
          echo "<h2>No Orders were found!</h2>";
          
          }
          echo"<table>";
            echo"<tr> <th>TRUCK</th> <th>LOAD TYPE</th> <th>SOURCE</th> <th>DESTINATION</th>  <th>DATE</th> <th>MATERIALS</th> <th>DISTANCE</th> <th>PRICE</th> </tr>";
          while($row_pro=mysqli_fetch_array($run_pro)){
          

              $a = $row_pro['load_type'];
            $b = $row_pro['src'];
            $c = $row_pro['src_pin'];
            $d = $row_pro['dest'];
            $e = $row_pro['dest_pin'];
            $f = $row_pro['depart'];
            $g = $row_pro['materials'];
            $h = $row_pro['approx_dist'];
            $b_img = $row_pro['Image'];
            $i = $row_pro['b_price'];
          
            
              echo"<tr> <td><img src='$b_img' width='100' height='100' /></td> <td>$a</td> <td>$b<br>$c</td> <td>$d<br>$e</td>  
                <td>$f</td> <td>$g</td> <td>$h</td> <td>$i</td></tr>";
                    
              
          
          }
	?>	
</div>
</body>
</html>


