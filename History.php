<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Or Kilim and Tal Shalev</title>
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/historyPage/historyCSS.css">
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


    <h1>Drinkers</h1>
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
  <li><a href="admin.php">drinkers</a></li>
  <li>History</li>
</ul>



<center>

    <main>
            <a href="admin.php" id="logoalc"></a>
            <br>

            <?php   $querystring=$_SERVER["QUERY_STRING"];
                    $array;
                    parse_str($querystring,$array);
                    $query="SELECT * FROM tb_users_207 WHERE id=".$array["id"];
                    $result=mysqli_query($connection, $query);
                    $row=mysqli_fetch_assoc($result);
        ?>




<form >
  <input  type="button" value="Go back!" onclick="history.back()">
</form>


     <h1>History of <?php echo $row["name"];?>: </h1>
     <br>
     <h3>Apps blocked: </h3>
        <p>
        <?php echo $row["apps_blocked"];?>       
        </p>

     <h3>Contacts blocked: </h3>
         <p>
               <?php echo $row["blocked contacts"];?>
        </p>


     <h3>Emergency contacts: </h3>

     <p>
        <?php echo $row["emergancy contacts"];?>
    </p>
     <h3>His password :</h3>

     <p>
           <?php echo $row["password"];?>
                </p>

    </main>
    </center>

    <script src="includes/historyPage/historyJS.js"></script>
</body>

</html>

<?php 

mysqli_close($connection);

?>



