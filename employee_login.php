<html>
  <head>
      <title>Employee Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>   
 <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                <form method="post" action="db/employee_login.php">
                   
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Username </span>
                        <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Password  </span>
                        <input type="password" name="password" class="form-control" aria-label="password" aria-describedby="basic-addon1">
                    </div>
                    <hr/>
                    <input type="submit" value="Login" name="loginsubmit" style="float:right;" class="btn btn-success">
                </form>
                </div>
               
                <?php include('include/message.php'); ?> 
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>