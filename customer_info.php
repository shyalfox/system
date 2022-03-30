<?php
  session_start();
  if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
     header('Location:login.php');
  }
  $id = $_SESSION['user_id']; 
  include('db/connect.php');
  $query = "SELECT * FROM customers WHERE id='$id'";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_assoc($result);
  $categoryQuery = "SELECT * FROM customers";
  $categoryResult = mysqli_query($conn, $categoryQuery);


?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
<div class="col-md-12">
<div class="row justify-content-md-center">
            <?php
              if(mysqli_num_rows($categoryResult)==0){
                echo "<h3>No goals yet</h3>";
              }
              else{
                ?>
                <table class="table">
                  <thead>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Contact No</th>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($categoryResult)){?>
                    <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo$row['username'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['password'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <td><?php echo $row['contact_no'];?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
          </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js
" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js
" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/833795b4ff.js
" crossorigin="anonymous"></script>
  <script src="bootbox/bootbox.min.js"></script>
  </body>

</html>