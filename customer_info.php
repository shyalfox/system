<?php
 if(!isset($_SESSION['login'])) 
 { 
     session_start(); 
 } 
  if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
     header('Location:login.php');
  }
  $id = $_SESSION['user_id']; 
  include('db/connect.php');
  $query = "SELECT * FROM customers WHERE id='$id'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($result);
  $showingQuery = "SELECT * FROM customers where id='$id'";
  $showingUname = mysqli_query($conn, $showingQuery);
  $showingProfile = mysqli_query($conn, $showingQuery);
  $showingEmail = mysqli_query($conn, $showingQuery);
  $showingAddress= mysqli_query($conn, $showingQuery);
  $showingContact = mysqli_query($conn, $showingQuery);
  $showingId = mysqli_query($conn, $showingQuery);
  


?>
<html>
    <head>
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

<div class="container bootstrap snippet">
<?php include('nav.php');  ?> </br></br></br></br></br></br></br></br></br></br>
    <div class="row">
  		<div class="col-sm-10">
              <h1 style="color:#d4811c;position:absolute;left:9%"><?php while ($row = mysqli_fetch_assoc($showingUname)){
                echo $row['username'];
                     }?></h1>
            </div>
            <br>  <br>  <br>  <br>
    	
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center ">
      <?php while ($row = mysqli_fetch_assoc($showingProfile)) {?>
        <img style=" border:2px #d4811c solid; border-radius:50%;float:left; display: block;margin-left: auto;margin-right: auto;width: 300px;height:300px " src="profile-img/<?php echo $row['profile_pic'];?>" alt="">
        <?php } ?>

 
        </div><br>

               
         
          
          <ul class="list-group">
           
          </ul> 
               
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">
                   <h3  style="font-weight:bold;"> Your Info</h3></a></li>
                </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
            
                  <form class="form" action="##" method="post" id="registrationForm">
                   
                  <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for=""><h3>User ID</h3></label>
                            <div class="form-control"><h3 style="font-weight:bold"><?php while ($row = mysqli_fetch_assoc($showingId)){
                                echo $row['id'];
                                 }?></h3>
                             </div>
                            
                             
                          </div>
                      </div>
                           
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for=""><h3>Email Address</h3></label>
                            <div class="form-control"><h3 style="font-weight:bold"><?php while ($row = mysqli_fetch_assoc($showingEmail)){
                                  echo $row['email'];
                                 }?></h3>
                             </div>
                            
                             
                          </div>
                      </div>
                      

                      
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6"><br>
                              <label for="phone"><h3>Address</h3></label>
                              <div class="form-control"><h3 style="font-weight:bold"><?php while ($row = mysqli_fetch_assoc($showingAddress)){
                                  echo $row['address'];
                                 }?></h3>
                             </div>
                            
                          </div>
                      </div>
                      
          
                      <div class="form-group">
                          <div class="col-xs-6"><br>
                             <label for="mobile"><h3>Contact No</h3></label>
                             <div class="form-control"><h3 style="font-weight:bold"><?php while ($row = mysqli_fetch_assoc($showingContact)){
                                  echo $row['contact_no'];
                                 }?></h3>
                             </div>
                           
                          </div>
                      </div>
                    
                          
                          
                    
              
              	</form>
              
              <hr>
              
             </div>
             
             <div class="col-xs-12">
                                <br><br>
             <a href="customer_edit.php"><button  class="btn btn-lg btn-success"><h4><i class="glyphicon glyphicon-pencil"></i> Edit Info</h4></button></a>
                        
                </div>
            
                     
            
              
               
              
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                  






   
<!--
      <?php while ($row = mysqli_fetch_assoc($showingResult)){
        echo "<div class=\"profile_css\"><img  src='profile-img/".$row['profile_pic']."' /></div>";
        echo $row['username'];
        echo $row['email'];
        echo $row['contact_no'];

        }?>-->
                 
      
 
  </body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>