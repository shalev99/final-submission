










<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="includes/cssuser.css">  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    





<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="mycoupons.php" class="w3-bar-item w3-button">my coupons</a>
  <a href="myhistory.php" class="w3-bar-item w3-button">my history</a>
  
  <a href="index.php" class="w3-bar-item w3-button">Switch user</a>
</div>







<!-- Page Content -->
<div class="w3-teal">
  <button class="x" onclick="w3_open()">☰</button>
  <div class="w3-container">


  <div class="linkstodelete">
  <a href="mycoupons.php" class="w3-bar-item w3-button">my coupons</a>
  <a href="myhistory.php" class="w3-bar-item w3-button">my history</a>
  <a href="index.php" class="w3-bar-item w3-button">Switch user</a>

</div>


    <h1>My history</h1>
  </div>
</div>



<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>



<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="drinker.php">user</a></li>
  <li>My history</li>
</ul>



<center>

<?php

include 'db.php';
include "config.php";


session_start();
$query="SELECT * FROM tb_users_207 WHERE name='".$_SESSION["name"]."'";


$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);

echo "<div><b>name: </b> ".$row["name"]."<br> 
<b>blocked apps:</b> ".$row["apps_blocked"]."<br>

<b>emergancy contacts: </b> ".$row["emergancy contacts"]."<br>
<b>blocked contacts:  </b>".$row["blocked contacts"].";";


?>
</center>


</body>
</html>


<?php 

mysqli_close($connection);

?>