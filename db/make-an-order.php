<?php  
    
    session_start();
    include('connect.php');
    $aid = $_SESSION['user_id'];
    $time = date('Y-m-d h:i:s');
    $quantity = $_POST['item_quantity'];
    $ordereditem = $_POST['item_name'];
    $item_price=$_POST['item_price'];
    $item_total=$_POST['item_total'];
    $item_status=$_POST['item_status'];


    
    if(isset($_POST['submit'])){
             
            
            $cquery = "INSERT INTO orders(customer_id,item_name, quantity, time,price,total,status) VALUES ($aid, '$ordereditem',$quantity, '$time','$item_price','$item_total','$item_status' )";
            mysqli_query($conn, $cquery);
            $dquery = "DELETE FROM cart WHERE customer_id='$aid'";
            mysqli_query($conn, $dquery);
            header('Location:../make-an-order.php');
}





?>

