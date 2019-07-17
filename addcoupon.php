<?php 
include "db.php";
include "config.php";
?>

<?php
$querystring=$_SERVER["QUERY_STRING"];
$array;
parse_str($querystring,$array);


if(!empty($_POST["name"])){
        
        $name = mysqli_real_escape_string($connection, $_POST['name']);
		$amount = mysqli_real_escape_string($connection, $_POST['amount']);


        $query="insert into tbl_users_207_coupons(coupon_id,name,discount) values (NULL,'$name','$amount')";
        

    $result=mysqli_query($connection,$query);
    if(!$result)
    {echo "connection problems";}
    
    else{
        echo "new coupon added for ".$name." with the following discount: ".$amount."%";
        }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>or and tal</title>
    <link rel="stylesheet" href="includes/addcoupon/addcouponCSS.css">
    <script src="includes/coupons/jquery-3.3.1.min - Copy.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>




<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="admin.php" class="w3-bar-item w3-button">drinkers</a>
  <a href="adminVIP.php" class="w3-bar-item w3-button">VIPs</a>
  <a href="couponsEmergancy.php" class="w3-bar-item w3-button">coupons</a>
  <a href="index.php" class="w3-bar-item w3-button">Switch user</a>
</div>







<!-- Page Content -->
<div class="w3-teal">
  <button class="x" onclick="w3_open()">☰</button>
  <div class="w3-container">


  <div class="linkstodelete">
  <a href="admin.php" class="w3-bar-item w3-button">drinkers</a>
  <a href="adminVIP.php" class="w3-bar-item w3-button">VIPs</a>
  <a href="couponsEmergancy.php" class="w3-bar-item w3-button">coupons</a>
  <a href="index.php" class="w3-bar-item w3-button">Switch user</a>

</div>


    <h1>Add a coupon</h1>
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
  <li><a href="couponsEmergancy.php">Coupons</a></li>
  <li>Add a coupon</li>
</ul>




<center>
<h1>Enter coupon info:</h1>
<form action="#" method="post">
<?php 
if(!empty($array["name"])){
echo "<label>name:<input type='text' name='name' maxlength='10' minlength='4' value='".$array["name"]."'></label>";
}
else{
    //echo "<label>name:<input type='text' name='name' maxlength='10' minlength='4' value=''></label>";
    echo "<div>
            <select  name='name'  id='multichoice'>
                    <option selected>Choose vendor...</option>
                    <option id='1'></option>
                    <option id='2'></option>
                    <option id='3'></option>
                    <option id='4'></option>
                    <option id='5'></option>
                  </select>
                  <br>
                  
        
    </div>";



}
?>

<br>
<label>discount amount:<input type="number" name="amount" value=""></label>
<br><br>
<label><input type="submit" value="add coupon"></label>


</form>
<br>

<form >
  <input type="button" value="Go back!" onclick="history.back()">
</form>

<script src="includes/coupons/addcouponsJS.js"></script>
</center>
</body>
</html>


<?php 

mysqli_close($connection);

?>

