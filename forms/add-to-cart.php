<?php

  session_start();
  $uid = $_SESSION['user_id'];

  include('../db/connect.php');
  include('../include/message.php');
  // $date = date('m/d/Y h:i:s a', time());
  $date = date('Y-m-d h:i:s');

  if(isset($_POST['submit'])){
    $price=$_POST['item-price'];
    $checked =$_POST['item-name'];
    $quantity=$_POST['quantity'];
           $total= bcmul( $quantity,$price);
          $query = "INSERT INTO cart(customer_id,item, time,quantity,price,total) VALUES($uid, '$checked','$date','$quantity','$price',$total )";
          mysqli_query($conn, $query);
          header('Location:../make-an-order.php');
          
      
  }



  // if(isset($_POST['submit'])){
   
  //     if(!empty($_POST['item-name'])){
  //     foreach($_POST['item-name'] as $checked){
  //       $quanss=$_POST['item-price'];
  //       $quantity=$_POST['quantity'];
        
  //      
  //         $query = "INSERT INTO cart(customer_id,item, time,quantity,price,total) VALUES($uid, '$checked','$date','$quantity','$quanss',$total )";
  //         mysqli_query($conn, $query);
  //         header('Location:../make-an-order.php');
          
  //     }
    
  //   }
  // }


?>


<!-- original code -->
<!-- if(isset($_POST['submit'])){
      if(!empty($_POST['ordered-item'])){
      foreach($_POST['ordered-item'] as $checked){
        echo $checked."</br>";
      }
    }
  } -->