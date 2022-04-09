<?php  
    
    include('db/connect.php');
    $oquery = "SELECT * FROM orders";
    $ores = mysqli_query($conn, $oquery);
    $row = mysqli_fetch_assoc($ores);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="item_insertion.php">ADD ITEMS</a>
    </br>
    <h2>Orders</h2>
    <table>
              <thead>
                <th>customer id</th>
                <th>customer</th>
                <th>email</th>
                <th>address</th>
                <th>contact number</th>
                <th>item</th>
                <th>price</th>
                <th>quantity</th>
                <th>total</th>
                <th>time</th>
                <th>status</th>

             </thead>
             <hr>
             <tbody>
             <?php  while($row = mysqli_fetch_assoc($ores)){?>
              <tr>  
             <?php      
                 //   for customer info
                $cid = $row['customer_id'];
                $customerQuery= "SELECT * FROM customers WHERE id = $cid";
                $cResult = mysqli_query($conn, $customerQuery);
                $cRow = mysqli_fetch_assoc($cResult);
                // for item info
                $iQuery = "SELECT * FROM items WHERE name ='{$row['item_name']}'" ;
                $iResult = mysqli_query($conn, $iQuery);
                $iRow = mysqli_fetch_assoc($iResult);
            ?>
                    
                     <td><?php echo $row['customer_id'];?></td>
                     <td><?php echo $cRow['username'];?></td>
                     <td><?php echo $cRow['email'];?></td>
                     <td><?php echo $cRow['address'];?></td>
                     <td><?php echo $cRow['contact_no'];?></td>
                     <td><?php echo $row['item_name'];?></td>
                     <td><?php echo $iRow['price'];?></td>
                     <td><?php echo $row['quantity'];?></td>
                     <td><?php echo $row['quantity']*$iRow['price'];?></td>
                     <td><?php echo $row['time'];?></td>
                     <td><?php echo $row['status'];?></td>
                     <td><a href="update-status.php?orderId=<?php echo $row['id'];?>">Update Status</a></td>
                     
              </tr>
            <?php  }?>
            <?php include('include/message.php'); ?>
                 
             </tbody>
    </table>

</body>
</html>