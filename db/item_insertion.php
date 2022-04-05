<?php
    include('connect.php');
if(isset($_POST['item_name']) && isset($_POST['item_price'])){
    $item = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $file = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];
    $target = '../items-img/'.$file;
    move_uploaded_file($tempname,$target);


}else{
    $msg="all field are required";
}

if($item!=''){
   
    $query = "INSERT INTO items(name,price,image) VALUES('$item','$item_price', '$file')";
         if(mysqli_query($conn,$query)){
    $msg ="Successfully Inserted";
        }else{
    $msg = mysqli_error();
}
header('Location:../item_insertion.php?msg='.$msg);
}else{
$msg ="Category name required";
header('Location:../item_insertion.php>?errmsg='.$msg);
}


?>  

