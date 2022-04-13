<?php
 session_start();
include('connect.php');
if(isset($_POST['delete'])){
         $aid = $_SESSION['user_id'];
      $query = "DELETE FROM cart WHERE customer_id='$aid'";
      if (mysqli_query($conn,$query)) {
          header ("Location:../index.php");
      }else {
          header("Location:../smake-an-order.php?errmsg=" .mysqli_error($conn));
      }
}
  