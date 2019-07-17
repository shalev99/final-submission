
<?php 
include "db.php";
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Or Kilim and Tal Shalev</title>
    <link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="includes/admin/adminCSS.css">
<!------ Include the above in your HEAD tag ---------->
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
  <li>Drinkers</li>
</ul>



        
        <a href="index.php" id="logoalc"></a>
        <br>
        

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Users of Alcolock:</span>
                    <ul class="pull-right c-controls">
                      
                    </ul>
                </div>
                
                <div class="row" style="display: none;">
                        <div class="col-xs-12">
                            <div class="input-group c-search">
                                <input type="text" class="form-control" id="contact-list-search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                                </span>
                            </div>
                        </div>
                    </div>
                
                <ul class="list-group" id="contact-list">
                <?php   $counter=1;
                        $query="SELECT * FROM tb_users_207";
                        $result=mysqli_query($connection, $query);
                        while($row=mysqli_fetch_assoc($result)){
                            if($row["admin"]!=1){
                        echo "<li class='list-group-item'>
                        
                        <div class='col-xs-12 col-sm-9'>
                            <span class='name'>".$row["name"]."</span><br/>
                            <a href='History.php?id=".$counter."'  id='logo'>History </a>
                            <button onclick='sendVIP(".$row["id"].")'>make VIP</button>
                            <span class='glyphicon glyphicon-earphone text-muted c-info' data-toggle='tooltip' title=".$row["phone"]."></span>
                            <span class='visible-xs'> <span class='text-muted'>  </span><br/></span>
                            <span class='fa fa-comments text-muted c-info' data-toggle='tooltip' title=".$row["email"]."></span>
                            <span class='visible-xs'> <span class='text-muted'>".$row["email"]."</span><br/></span>
                        </div>
                        <div class='clearfix'></div>
                    </li>";
                    }
                    $counter++;
                }
                    
                    ?>

                </ul>
            </div>
        </div>
	</div>
    
    <div id="cant-do-all-the-work-for-you" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Ooops!!!</h4>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- JavaScrip Search Plugin -->

    
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    <script src="includes/admin/adminJS.js"></script>
</div>
</body>

</html>


<?php 

mysqli_close($connection);

?>