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
    $query = "INSERT INTO items(name,price) VALUES('$item','$item_price')";
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


if(isset($_FILES['image']['name']))
                {
                    //Upload the Image
                    //To upload image we need image name, source path and destination path
                    $image_name = $_FILES['image']['name'];
                    
                    // Upload the Image only if image is selected
                    if($image_name != "")
                    {

                        //Auto Rename our Image
                        //Get the Extension of our image (jpg, png, gif, etc) e.g. "specialfood1.jpg"
                        $ext = end(explode('.', $image_name));

                        //Rename the Image
                        $image_name = "Food_Category_".rand(000, 999).'.'.$ext; // e.g. Food_Category_834.jpg
                        

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/category/".$image_name;

                        //Finally Upload the Image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        //Check whether the image is uploaded or not
                        //And if the image is not uploaded then we will stop the process and redirect with error message
                        if($upload==false)
                        {
                            //SEt message
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                            //Redirect to Add CAtegory Page
                            header('location:'.SITEURL.'admin/add-category.php');
                            //STop the Process
                            die();
                        }

                    }
                }
                else
                {
                    //Don't Upload Image and set the image_name value as blank
                    $image_name="";
                }
