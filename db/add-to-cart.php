<?php  
    
    session_start();
    $uid = $_SESSION['user_id'];
    $item = $_POST['item_name'];
    $time = $_POST['order_time'];
    $quantity = $_POST['quantity'];

    include('connect.php');
    $CQuery = "INSERT INTO cart(customer_id, item, quantity, time) VALUES('$uid','$item', $quantity , '$time')";
    if(mysqli_query($conn, $CQuery)){
        header('Location:../add-to-cart.php?msg=order placed');
    }
    else{
        header('Location:../make-an-order.php?msg=error'); 
    }
?>