<?php


include 'db.php';


$sql = 'UPDATE `studDB19a`.`tb_users_207` SET `VIP` = \'1\' WHERE `tb_users_207`.`id` ='.$_POST["id"].' LIMIT 1;';
//$query="UPDATE  tb_users_207 SET  VIP =  1 WHERE  `tb_users_207`.`id` =".$POST_["id"]." LIMIT 1 ;";
mysqli_query($connection,$sql);

mysqli_close($connection);

?>