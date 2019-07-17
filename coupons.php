
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
<script src="includes/coupons/jquery-3.3.1.min - Copy.js"></script>
<link rel="stylesheet" href="includes/coupons/couponsCSS.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php   /*$deletionquery="delete from tbl_users_207_coupons where tbl_users_207_coupons.coupon_id=".$_SERVER["QUERY_STRING"]." LIMIT 1;";
        echo $deletionquery;
        $result=mysqli_query($connection,$query);*/

        ?>
        <a href="index.php" id="logoalc"></a>
        <br>
        
<div id="company_photo">

<div class="side menu">
                <ul>

                <li><a href="admin.php">drinkers</a></li>
                <li><a href="adminVIP.php">VIPs</a></li>
                <li><a href="#">coupons</a></li>

                </ul>
                </div>


</div>
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
                        $query="SELECT * FROM tbl_users_207_coupons";
                        $result=mysqli_query($connection, $query);
                        while($row=mysqli_fetch_assoc($result)){
                           
                        echo "<li class='list-group-item'>
                        
                        <div class='col-xs-12 col-sm-9'>
                            <span class='name'>".$row["name"]."</span><br/>
                            
                            <div class='discountNum'>".$row["discount"]."% discount</div>
                            
                            <div class='".$counter."'>delete coupon ".$counter."</div>
                            <div class='edit_button'>edit</div>
                            <div>
                        </div>
                        <div class='clearfix'></div>
                    </li>";
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
    
    <div class="plus_button">
    <a href="addcoupon.php">Add a coupon<a>
    </div>
    
    




    <!-- JavaScrip Search Plugin -->

    
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    <script src="coupons/couponsJS.js"></script>
</div>
</body>

</html>


<?php 

mysqli_close($connection);

?>

<?php /*<span class='glyphicon glyphicon-earphone text-muted c-info' data-toggle='tooltip' title=".$row["phone"]."></span>
                            <span class='visible-xs'> <span class='text-muted'>  </span><br/></span>
                            <span class='fa fa-comments text-muted c-info' data-toggle='tooltip' title=".$row["email"]."></span>
                            <span class='visible-xs'> <span class='text-muted'>".$row["email"]."</span><br/></span>*/


                            //<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


                            //<script src="coupons/couponsJS.js"></script>
                            ?>