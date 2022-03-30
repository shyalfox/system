<html>
    <head>

    </head>
    <body><form method=post action="db/employee_login.php">
            <label>Employee Id</label>
            <input type="number" name="id_num" placeholder="Enter ID no"></input>
            <label>Password </label>
            <input type="text" name="password" placeholder="Enter Password"></input>

            <input type="submit" value="Login" name="loginsubmit"></input>
        </form>
        <?php include('include/message.php');?>
    </body>
</html>