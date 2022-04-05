<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
</head>
<body>
    <form action="db/item_insertion.php" method="post" enctype="multipart/form-data">
        <label for="">Item Name</label>
        <input type="text" name="item_name">
        <label for="">Item Price</label>
        <input type="number" name="item_price">
        <label for="" > Image</label> <br>
        <input type="file" name="image">
        <button type ="submit">SUBMIT</button>
    </form>
    <?php include('include/message.php'); ?>
</body>
</html>