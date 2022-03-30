
<html>
    <head>
        
    </head>
    <body>
        <form method=post action="db/signup.php">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter your full Name"></input>
            <label>Contacts</label>
            <input type="number" name="contact_no" placeholder="Your Contact Number"></input>
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter email adress"></input>
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter your adress"></input>
            <label>Password </label>
            <input type="text" name="password" placeholder="Enter Password"></input>

            <input type="submit" value="Sign Up" name="submit"></input>
        </form>
        <?php include('include/message.php');?>

           

    </body>
</html>