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
   
</head>
<body>
    
<div id="cart_css" class=" container-fluid my-5 ">
<?php include('nav.php');?></br></br></br></br></br></br></br></br></br></br>
 <form action="db/cart.php">

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
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row"> <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body my-auto">
                                                <div class="row ">
                                                    <div class="col-auto">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">1 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto my-auto">
                                        <p class="boxed-1">2</p>
                                    </div>
                                    <div class=" pl-0 flex-sm-col col-auto my-auto ">
                                        <p style="color:black;"><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                                            <div class="media-body my-auto">
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p class="boxed">3</p>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p style="color:black;"><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row"> <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body my-auto">
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p class="boxed-1">2</p>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p style="color:black;"><b>179 SEK</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p style="color:black;"class="mb-1"><b>Subtotal</b></p>
                                                <p style="color:black;"class="mb-1"><b>Shipping</b></p>
                                                <p style="color:black;"><b>Total</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p style="color:black;" class="mb-1"><b>179 SEK</b></p>
                                                <p style="color:black;" class="mb-1"><b>0 SEK</b></p>
                                                <p style="color:black;"class="mb-1"><b>537 SEK</b></p>
                                                
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                              
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                               
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                                <div class="row mb-5 mt-4 ">
                                    <div class="col-md-7 col-lg-6 mx-auto"><input style="fomt-size:200px" type="submit" value="Make an Order" class="btn btn-block btn-outline-primary btn-lg"></input></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="db/cart.php">
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