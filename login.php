<?php 
 session_start();
if(isset($_SESSION['login'])){
  header('Location:index.php');
}

?>

<html>
    <head>
    <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/bigboy.jpg" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Asmt Cafeteria</h4>
                </div>

        <form method=post action="db/login.php">
        <p id="para">Login to Asmt Cafeteria</p>
        <div class="form-outline mb-4">
        <label class="form-label" for="form2Example11">Email Address</label>
            <input id="form2Example11" class="form-control" type="text" name="email" placeholder="Enter email adress"></input>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example22">Password</label>
        <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Enter Your Password">
                  
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <input type="submit" value="Login" name="login" class="btn btn-outline-danger">
        
                  </div>
                  <?php include('include/message.php');?>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2" href="signup.php">Don't have an account?&nbsp;&nbsp;&nbsp;</p>
                   <a href="signup.php"> <button type="button"  class="btn btn-outline-danger">Create new</button></a>
                  </div>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2" href="signup.php">Employee Login Page&nbsp;&nbsp;&nbsp;</p>
                   <a href="employee_login.php"> <button type="button"  class="btn btn-outline-danger">Go</button></a>
                  </div>


         
           

      
        </form>
        
        </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Better Food Better Life</h4>
                <p class="small mb-0">We are happy to serve you
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

           

           

    </body>
</html>
<!-- comment in a branch branch-1 -->