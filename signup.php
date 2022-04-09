
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
                <form method=post action="db/signup.php" enctype="multipart/form-data">
                  <p id="para">Make an account for Cafeteria</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>
                  <input type="text" id="form2Example22" class="form-control" name="username" placeholder="Enter your UserName"></input>
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Profile Picture</label>
                  <input type="file" name="image">
                  
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Email Address</label>
                  <input id="form2Example22" class="form-control" type="text" name="email" placeholder="Enter email address" ></input>
                  
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Contact Number</label>
                  <input id="form2Example22" class="form-control"  type="number" name="contact_no" placeholder="Your Contact Number"></input>
                  
                  </div>
                 
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Address</label>
                  <input  id="form2Example22" class="form-control" type="text" name="address" placeholder="Enter your address"></input>
                  
                  </div>
                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">New Password</label>
                  <input  id="form2Example22" class="form-control"  type="text" name="password" placeholder="Enter Password"></input>
                  
                  </div>
                  
                  <div class="d-flex align-items-center justify-content-center pb-4">
                 <input class="btn btn-outline-danger" type="submit" value="Sign Up" name="submit"></input>
                   
                  </div>

                 

                

                </form>
                   <?php include('include/message.php'); ?> 


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
<script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</script>