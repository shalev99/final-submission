<?php

    include 'db.php';

    $query="DELETE FROM tbl_users_207_coupons WHERE coupon_id=".$_POST["id"].";";
    mysqli_query($connection,$query);
    
    mysqli_close($connection);
                    
?>