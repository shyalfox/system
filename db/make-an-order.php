<?php  
    
    session_start();
    $uid = $_SESSION['user_id'];
    // $item = $_POST['item_name'];
    $time = $_POST['order_time'];
    // $quantity = $_POST['quantity'];

    include('connect.php');
    
    //     $CQuery = "INSERT INTO orders(customer_id, item_name, quantity, time) VALUES('$uid','$item', $quantity , '$time')";
    //     if(mysqli_query($conn, $CQuery)){
    //         header('Location:../index.php?msg=order placed');
    //     }
    //     else{
    //         header('Location:../make-an-order.php?msg=error'); 
    //     }
    

    //new here:
    if(isset($_POST['submit'])){
        if(!empty($_POST['quantity'])){
            foreach($_POST['item_name'] as $index => $ordereditem){
                $cquery = "INSERT INTO orders(customer_id,item_name, quantity, time) VALUES($uid, '$ordereditem','$quantity[$index]', '$time' )";
                mysqli_query($conn, $cquery);
            }
            header('Location:../make-an-order.php');
          }

        // $CQuery = "INSERT INTO orders(customer_id, item_name, quantity, time) VALUES('$uid','$item', $quantity , '$time')";
        // if(mysqli_query($conn, $CQuery)){
        //     header('Location:../index.php?msg=order placed');
        // }
        // else{
        //     header('Location:../make-an-order.php?msg=error'); 
        // }
    }
   
?>

// if(isset($_POST['submit'])){
//       if(!empty($_POST['ordered-item'])){
//       foreach($_POST['ordered-item'] as $checked){
//           $query = "INSERT INTO cart(customer_id,item, time) VALUES($uid, '$checked','$date' )";
//           mysqli_query($conn, $query);
//       }
//       header('Location:../make-an-order.php');
//     }
//   }