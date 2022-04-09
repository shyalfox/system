<?php
 if(!isset($_SESSION['login'])) 
 { 
     session_start();} 
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
}
  include('db/connect.php');
  $query = "SELECT * FROM items";
  $result = mysqli_query($conn, $query);
  $uid = $_SESSION['user_id'];
  $userQuery = "SELECT * FROM customers WHERE id='$uid'";
  $userShow = mysqli_query($conn, $userQuery);
  $userQuerys = "SELECT * FROM customers WHERE id='$uid'";
  $userShows = mysqli_query($conn, $userQuerys);
  $data = mysqli_fetch_assoc($result);

?>



<html>
    <head>
        

</head>




<!-- ======= Header ======= -->

<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
       

      <h1 class="logo me-auto me-lg-0 "><a href="index.php">Asmt Cafeteria</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
     <!--navbar-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          
        
    

         

      <!--logged in User menu area-->
        <ul>
          <li class="dropdown"><span><a href="#">
          <?php while ($row = mysqli_fetch_assoc($userShow)) {?>
        <img style=" border:2px #d4811c solid; border-radius:50%; height:30px; width:30px  " src="profile-img/<?php echo $row['profile_pic'];?>" alt="">
        <?php } ?>&nbsp;
           <?php while ($row = mysqli_fetch_assoc($userShows)){?><?php echo $row['username'];?>
                <?php } ?><i class="bi bi-chevron-down"></i></span></a>
            <ul>
              <li><a href="customer_info.php">My Account</a></li>
              <li><a href="cart.php">My Cart</a></li>
              <li><a href="order.php">My Orders</a></li>
              <li>
                <a><form method="post" action="db/logout.php">
                  <input class="btn btn-outline-danger" type="submit" value="logout" name="logout"></input>
               </form></a>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      


    </div>
  </header><!-- End Header -->

  <html>
      <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
