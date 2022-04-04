<?php
    session_start();
    $uid = $_SESSION['user_id'];
    include('db/connect.php');
    $Cdate = date('Y-m-d h:i:s');
    $CartQuery = "SELECT * FROM orders WHERE customer_id =$uid AND time ='$Cdate'";
    $CartResult = mysqli_query($conn, $CartQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
</head>
<body>
    <table>
    <th>Item</th>
    <th>Quantity</th>
    <form action="db/cart.add-to-cart.php" method="post">
    <?php while($row=mysqli_fetch_assoc($CartResult)) { ?>        
                  <tr>            
                    <td ><?php echo $row['item_name'];?></td>
                    <td><label for="">Quantity</label><input type="number" name ="quantity"></td>
                  </tr>
     <?php } ?>
     </table>
     <button type="submit">Order</button>
     </form>
    

</body>
</html>