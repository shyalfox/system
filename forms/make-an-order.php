<?php

  session_start();
  $uid = $_SESSION['user_id'];

  include('../db/connect.php');
  include('../include/message.php');
  // $date = date('m/d/Y h:i:s a', time());
  $date = date('Y-m-d h:i:s');

  if(isset($_POST['submit'])){
      if(!empty($_POST['ordered-item'])){
      foreach($_POST['ordered-item'] as $checked){
          $query = "INSERT INTO orders(customer_id,item_name, time) VALUES($uid, '$checked','$date' )";
          mysqli_query($conn, $query);
      }
      header('Location:../add-to-cart.php');
    }
  }
?>


<!-- original code -->
<!-- if(isset($_POST['submit'])){
      if(!empty($_POST['ordered-item'])){
      foreach($_POST['ordered-item'] as $checked){
        echo $checked."</br>";
      }
    }
  } -->