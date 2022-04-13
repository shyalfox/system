<?php
  if(!isset($_SESSION['login'])) 
  { 
      session_start(); 
  } 
   if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
      header('Location:login.php');
   }

   
   $zid = $_SESSION['user_id']; 
   include('db/connect.php');

  
   $queryCart = "SELECT * FROM cart where customer_id='$zid'";
   $resultCart = mysqli_query($conn,$queryCart);
  
   
 
 
 ?>

<!DOCTYPE html>
<html lang="en">
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
   
</head>
<body>
    
<div id="cart_css" class=" container-fluid my-5 ">
<?php include('nav.php');?></br></br></br></br></br></br></br></br></br></br>
 

    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col">
                       
                    </div>
                    <div class="col">
                        <div class="row justify-content-start ">
                        
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-5">
                         <div class="card border-0">
                            <div class="card-header pb-0">
                                <h1 style="color:black;"class="card-title space ">Checkout</h1>
                                <p class="card-text text-muted mt-4 space">ORDER DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                
                                <div class="row mt-4">
                                    <div class="col">
                                        <p class="text-muted mb-2"></p>
                                        <hr class="mt-0">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group"> <label for="NAME" class="small text-muted mb-1"><h3>Message For Us</h3></label> 
                                <textarea style="height:100px"type="text" class="form-control " name="NAME" id="NAME" aria-describedby="helpId" placeholder="Personalize Orders or Give Comments" ></textarea>
                                 </div>
                                
                                
                                <div class="row no-gutters">
                                    <div class="col-sm-6 pr-sm-2">
                                    
                                    </div>
                                    <div class="col-sm-6">
                                       
                                    </div>
                                </div>
                                <div class="row mb-md-5">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4 mb-2 space">YOUR ORDER <span style="color:red !important;" class=" small text-muted ml-2 cursor-pointer"><u>EDIT SHOPPING BAG</u></span> </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                <div class="row justify-content-between">
            
                                    <div class="col-auto col-md-12">
                                        <div class="media flex-column flex-sm-row"> 
                                            <div class="media-body my-auto">
                                             
                                                    <table class="table">
                                                        <thead>
                                                        <th ><h2>Food</h2></th>
                                                        
                                                       
                                                         <th ><h2>Quantity</h2></th>
                                                        
                                                         <th ><h2>Price</h2></th>
                                                         <th ><h2>Total</h2></th>
                                                         <th> 
                                                         <form action="db/make-an-order.php" method="POST">
              
                                                            </thead>
                                                              <tbody>
                                                          
                                                               <?php while($row=mysqli_fetch_assoc($resultCart)) { ?>    
                                                                <tr>
                                                                 <td ><h3><?php echo $row['item'];?> </h3>
                                                                 <input  type="hidden" name="item_name" value="<?php echo $row['item'];?>">
                                                              <td ><h3><?php echo $row['quantity'];?></h3>
                                                              <input  type="hidden" name="item_quantity" value="<?php echo $row['quantity'];?>">
                                                              <td ><h3><?php echo $row['price'];?></h3>
                                                              <input type="hidden" name="item_price" value="<?php echo $row['price'];?>">
                                                              <td ><h3><?php echo $row['total'];?></h3>
                                                              <input type="hidden" name="item_total" value="<?php echo $row['total'];?>">
                                                              <input type="hidden" name="item_status" value="Placed">

                  
                    
                                                               </tr>
                                                               <?php } ?>
                                                                </tbody>
                
                                                             
                                                        </table>  
                                                           
                 
             
                                                   
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <hr class="my-2">
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <h3 style="color:black;"><b>Total</b></h3>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p style="color:black;" class="mb-1"><b>179 SEK</b></p>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                </div>
                                <input style="fomt-size:200px" name="submit" type="submit" value="Make an Order" class="btn btn-block btn-outline-primary btn-lg"></input>
                                </form></br></br>
                            <form action="db/delete.php" method="Post">
                            <input style="fomt-size:200px" name="delete" type="submit" value="Empty The Cart" class="btn  btn-outline-primary btn-block btn-lg "></input>

                                                               </form></br></br></br>
                            <h4 style="color:black;text-align:center;">Note: Empty the previous cart items before making new orders</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

			
<script	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>	
		
<script	src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
<script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>	