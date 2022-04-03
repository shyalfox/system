<?php

  include('../db/connect.php');
  include('../include/message.php');

  if(isset($_POST['submit'])){
      if(!empty($_POST['ordered-item'])){
      foreach($_POST['ordered-item'] as $checked){
          $query = "INSERT INTO orders(customer_id,time,item_id  ) VALUES(NULL,'2020-01-1', '$checked' )";
          mysqli_query($conn, $query);
      }
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