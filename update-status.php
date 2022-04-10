<?php
    // if(isset($_GET['orderId'])){
    //     $oId = $_GET['orderId'];
    //     $uQuery = "SELECT * FROM o"
    // }
?>



<div class="main-content">
    <div class="wrapper">
        <h1>Update Order</h1>
        <br><br>


        <?php 
            include("db/connect.php");
        
            //CHeck whether id is set or not
            if(isset($_GET['orderId']))
            {
                //GEt the Order Details
                $id=$_GET['orderId'];

                //Get all other details based on this id
                //SQL Query to get the order details
                $sql = "SELECT * FROM orders WHERE id=$id";
                //Execute Query
                $res = mysqli_query($conn, $sql);
                //Count Rows
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Detail Availble
                    $row=mysqli_fetch_assoc($res);
                    $time = $row['time'];
                    $food = $row['item_name'];
                    $qty = $row['quantity'];
                    $status = $row['status'];
                    $customerId = $row['customer_id'];
                }
                else
                {
                    //Detail not Available/
                    //Redirect to Manage Order
                    header('location:employee_home.php?msg=no order found');
                }
            }
            else
            {
                //REdirect to Manage ORder PAge
                header('location:employee_home.php?msg=noIdIsSet');
            }
        
        ?>

        <form action="" method="POST">
        
            <table>
                <tr>
                    <td>Food Name</td>
                    <td><b> <?php echo $food; ?> </b></td>
                </tr>

                <tr>
                    <td>Qty</td>
                    <td>
                        <input type="number" name="qty" value="<?php echo $qty; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status">
                            <option <?php if($status=="Ordered"){echo "selected";} ?> value="Ordered">Ordered</option>
                            <option <?php if($status=="processing"){echo "selected";} ?> value="processing">Processing</option>
                            <option <?php if($status=="Delivered"){echo "selected";} ?> value="Delivered">Delivered</option>
                            <option <?php if($status=="Cancelled"){echo "selected";} ?> value="Cancelled">Cancelled</option>
                        </select>
                    </td>
                </tr>

                <!-- <tr>
                    <td>Customer Name: </td>
                    <td>
                        <input type="text" name="customer_name" value="<?php //echo $customer_name; ?>">
                    </td>
                </tr> -->

                <tr>
                    <td clospan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="customerId" value="<?php echo $customerId; ?>">
                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </td>
                </tr>
            </table>
        
        </form>


        <?php 
            //CHeck whether Update Button is Clicked or Not
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //Get All the Values from Form
                include('db/connect.php');
                $id = $_POST['id'];
                $cId = $_POST['customerId'];
                $qty = $_POST['qty'];
                $status = $_POST['status'];

                // $customer_name = $_POST['customer_name'];
                // $customer_contact = $_POST['customer_contact'];
                // $customer_email = $_POST['customer_email'];
                // $customer_address = $_POST['customer_address'];

                //Update the Values
                $sql2 = "UPDATE orders SET 
                    quantity = $qty,
                    status = '$status',
                    time = '$time'
                    WHERE id=$id
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether update or not
                //And REdirect to Manage Order with Message
                if($res2==true)
                {
                    //Updated
                    $_SESSION['update'] = "<div class='success'>Order Updated Successfully.</div>";
                    header('location:employee_home.php?msg=success');
                }
                else
                {
                    //Failed to Update
                    $_SESSION['update'] = "<div class='error'>Failed to Update Order.</div>";
                    header('location:employee_home.php?errmsg='.mysqli_error($conn));
                }
            }
        ?>


    </div>
</div>


