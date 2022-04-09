<?php while($row=mysqli_fetch_assoc($CartResult)) { ?>        
                  <tr>            
                    <form id="target" action="db/make-an-order.php" method="post">
                    <td ><?php echo $row['item'];?></td>
                    <td><label for="">Quantity</label><input type="number" name ="quantity"></td>
                    <input type="hidden" name="item_name" value=<?php echo $row['item'] ?>>
                    <input type="hidden" name="order_time" value=<?php echo $row['time']; ?>>
                    <td><button type="submit" name="submit">Order</button></td>
                    </form>
                  </tr>
     <?php } ?>
     
  <!-- my table -->
  <table>
              <thead>
                <th>customer id</th>
                <th>item</th>
                <th>time</th>
                <th>status</th>
             </thead>
             <tbody>
             <?php  while($row = mysqli_fetch_assoc($ores)){?>
              <tr>
                     <td><?php echo $row['customer_id'];?></td>
                     <td><?php echo $row['item_name'];?></td>
                     <td><?php echo $row['time'];?></td>
                     <td><?php echo $row['status'];?></td>
              </tr>
            <?php  }?>
                 
             </tbody>
            </table>

<!-- online food.. table -->
     <table class="tbl-full">
                    <tr>
                        <th width="5%">#</th>
                        <th width="10%">Order Date</th>
                        <th width="10%">Food</th>
                        <th width="5%">Price</th>
                        <th width="5%">Qty</th>
                        <th width="6%">Total</th>
                        <th width="8%">Status</th>
                        <th width="10%">Customer</th>
                        <th width="10%">Contact</th>
                        <th width="15%">Email</th>
                        <th width="10%">Address</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Get all the orders from database
                        $sql = "SELECT * FROM tbl_order ORDER BY id DESC"; // DIsplay the Latest Order at First
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count the Rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //Create a Serial Number and set its initail value as 1

                        if($count>0)
                        {
                            //Order Available
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //Get all the order details
                                $id = $row['id'];
                                $food = $row['food'];
                                $price = $row['price'];
                                $qty = $row['qty'];
                                $total = $row['total'];
                                $order_date = $row['order_date'];
                                $status = $row['status'];
                                $customer_name = $row['customer_name'];
                                $customer_contact = $row['customer_contact'];
                                $customer_email = $row['customer_email'];
                                $customer_address = $row['customer_address'];
                                
                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $order_date; ?></td>
                                        <td><?php echo $food; ?></td>
                                        <td><?php echo '$'.$price; ?></td>
                                        <td><?php echo $qty; ?></td>
                                        <td><?php echo '$'.$total; ?></td>
                                        

                                        <td>
                                            <?php 
                                                // Ordered, On Delivery, Delivered, Cancelled

                                                if($status=="Ordered")
                                                {
                                                    echo "<label style='color: blue;'>$status</label>";
                                                }
                                                elseif($status=="On Delivery")
                                                {
                                                    echo "<label style='color: orange;'>$status</label>";
                                                }
                                                elseif($status=="Delivered")
                                                {
                                                    echo "<label style='color: green;'><b>$status</b></label>";
                                                }
                                                elseif($status=="Cancelled")
                                                {
                                                    echo "<label style='color: red;'>$status</label>";
                                                }
                                            ?>
                                        </td>

                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $customer_contact; ?></td>
                                        <td><?php echo $customer_email; ?></td>
                                        <td><?php echo $customer_address; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //Order not Available
                            echo "<tr><td colspan='12' class='error'>Orders not Available</td></tr>";
                        }
                    ?>

 
                </table>