<?php 
  include('connect.php');
   if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $address=$_POST['address'];
       $contact_no=$_POST['contact_no'];
       $pics= $_FILES['image'] ['name'];
       $tempnames = $_FILES['image'] ['tmp_name'];
       $targets = '../profile-img/'.$pics;
       move_uploaded_file($tempnames,$targets);

     if($username==''){
         $msg = "Username is required";
         header('Location:../signup.php?errmsg='.$msg);
     }        
     if($email==''){
         $msg = "Email Address is required";
         header('Location:../signup.php?errmsg='.$msg);
     }

     if($password==''){
         $msg = "Passowrd is required";
         header('Location:../signup.php?errmsg='.$msg);
     }

     if($contact_no==''){
        $msg = "Contact No is required";
        header('Location:../signup.php?errmsg='.$msg);
    }

    if($address==''){
        $msg = "Address is required";
        header('Location:../signup.php?errmsg='.$msg);
    }

     $encryptedPassword = md5($password);
     $query = "INSERT INTO customers(email,username,password,address,contact_no,profile_pic) VALUES('$email','$username','$encryptedPassword','$address','$contact_no','$pics')";
     if(mysqli_query($conn,$query)){
         $msg = "Signup successfully";
         header('Location:../login.php?msg='.$msg);
     }else{
         $msg = "Error: ".mysqli_error($conn);
         header("Location:../signup.php?errmsg=".$msg);
     }
   }else{
       $msg = "data is not acceptable";
       header("Location:../signup.php?errmsg=".$msg);
   }
?>