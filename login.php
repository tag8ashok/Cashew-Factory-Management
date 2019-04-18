<?php

$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'cashewdb');
session_start();


if(isset($_REQUEST['adminlog'])){  //Login for Admin

    $u=$_POST['adusn'];
    $p=$_POST['adpass'];
    
   $result=mysqli_query($con,"select * from user_details where email='$u' and password='$p'");
   if(mysqli_num_rows($result)>0)
   {
     $_SESSION['useradmin']=$u;
     header("location:adminhome.php");
    ?>
    <script>
       alert("You have logged in");
    </script>
  <?php
   }
   else
   {
    ?>
    <script>
       alert("Please Sign-Up first");
    </script>
  <?php
   }
  }





?>
