<?php
  session_start();
  if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
     header('Location:login.php');
  }
  $id = $_SESSION['user_id']; 
  include('db/connect.php');
  $orderQuery = "SELECT * FROM orders WHERE customer_id='$id' ORDER BY id DESC ";
  $orderResult = mysqli_query($conn, $orderQuery);


?>
<html>
    <head>
    <link rel="stylesheet" href="assets/css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">	
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body >
     <?php  include('nav.php');?></br></br></br></br></br></br></br></br></br></br></br>
<div class="col-md-12">
<div class="row justify-content-md-center">
            <?php
              if(mysqli_num_rows($orderResult)==0){
                echo "<h3>No orders yet</h3>";
              }
              else{
                ?>
                <table class="table">
                  <thead>
                    <th>Order Id</th>
                    <th>Item Name</th>
                    <th>Last Interaction On</th>
                    <th>Price</th>
                    <th>Qunatity</th>
                    <th>Total</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($orderResult)){?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                      <td><?php echo $row['item_name'];?></td>
                      <td><?php echo $row['time'];?></td>
                      <td><?php echo $row['price'];?></td>
                      <td><?php echo $row['quantity'];?></td>
                      <td><?php echo $row['total'];?></td>
                      <td><?php echo $row['status'];?></td>
                     
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
          </div>
    </div>
    <?php include('include/message.php');?>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>
  <script	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>	
		
<script	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
<script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>	
  
  </body>
  
</html>