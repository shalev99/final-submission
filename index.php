<?php 
    include 'db.php';
    include "config.php";

    session_start();
    if(!empty($_POST["loginMail"])){
        $query="SELECT * FROM tb_users_207 WHERE email='"
        .$_POST["loginMail"]
        ."' and password= '"
        .$_POST["loginPass"]
        ."'";
        
        $result=mysqli_query($connection, $query);
        $row=mysqli_fetch_assoc($result);
        if($_POST["loginMail"]==$row["email"]&&$_POST["loginPass"]==$row["password"]){
            //echo "successful login";
            $_SESSION["name"]=$row["name"];//storing the current user's name
            $_SESSION["user_id"]=$row["id"];//storing the current user's id
            if($row["admin"]==1)
            {
                header("location:admin.php"); 
            }
            else{
              header("location:drinker.php");  
            }
        }
        //echo $query;
        //echo $row["name"];
        else{
            echo "invalid match of password, email or both";
        }

       
        


        


        //header("location:http://shenkar.html5-book.co.il/2018-2019/web1/dev_207/includes/admin/admin.html");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="includes/style.css">  
        <script src="includes/main.js"></script>
        <meta charset="utf-8">
        <title>JOINS</title>
    </head>
        <body>
    <div class="container">
    

    <a href="index.php" id="logo"></a>

<br>

  <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form   action="#" method="post" id="frm"  class="modal-content animate" >
    <div class="imgcontainer">
      <img src="images/generic-user-purple.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="email" placeholder="Enter Mail" name="loginMail" required>
<br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="loginPass" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
    
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



    </body>
</html>
