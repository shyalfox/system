<?php
  include('connect.php');
  if(isset($_POST['loginsubmit'])){
      $employee_name = $_POST['name'];
      $passwords = $_POST['password'];

      if($employee_id==''){
          $msg = "id is required";
          header('Location:../employee_login.php?errmsg='.$msg);
      }
      if($password==''){
          $msg = "password is required";
          header('Location:../employee_login?errmsg='.$msg);
      }
     $query = "SELECT * FROM admin WHERE username = '$employee_name' AND password = '$passwords'";
    $result = mysqli_query($conn,$query);
    
    $row = mysqli_num_rows($result);
    if($row==1){
        $data = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['login']=1;
        $_SESSION['user_id']= $data['id'];

        header('Location:../employee_home.php');
    }else{
        header('Location:../employee_login.php?errmsg=idz and password does not match');
    }


  }

?>