<?php  
    
    session_start();
    include('connect.php');
    $uid = $_SESSION['user_id'];
    $time = $_POST['order_time'];
    $quantity = $_POST['quantity'];
    $ordereditem = $_POST['item_name'];
    
    if(isset($_POST['submit'])){
             
            
            $cquery = "INSERT INTO orders(customer_id,item_name, quantity, time) VALUES($uid, '$ordereditem',$quantity, '$time' )";
            mysqli_query($conn, $cquery);
}

    //new here:
    // if(isset($_POST['submit'])){
    //     if(!empty($_POST['quantity'])){
    //         foreach($_POST['item_name'] as $index => $ordereditem){
    //             $cquery = "INSERT INTO orders(customer_id,item_name, quantity, time) VALUES($uid, '$ordereditem',$quantity[$index], '$time' )";
    //             mysqli_query($conn, $cquery);
    //         }
    //         header('Location:../make-an-order.php');
    //       }

    // }
   
?>

<!-- // if(isset($_POST['submit'])){
//       if(!empty($_POST['ordered-item'])){
//       foreach($_POST['ordered-item'] as $checked){
//           $query = "INSERT INTO cart(customer_id,item, time) VALUES($uid, '$checked','$date' )";
//           mysqli_query($conn, $query);
//       }
//       header('Location:../make-an-order.php');
//     }
//   } -->