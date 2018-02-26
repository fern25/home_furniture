<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body style="background: url('bg/bg2.jpg');background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Registration</h4>
                    <a href="custLogin.php" class="btn btn-warning">Login</a>
                    <a href="custRegister.php" class="btn btn-success">Register</a>
                    <a href="custResetPass.php" class="btn btn-warning">Reset Password</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="fname">First Name:</label><br>
                            <input  id="fname" required="" type="text" name="fname"><br><br>
                            <label for="lname">Last Name:</label><br>
                            <input  id="lname" required="" type="text" name="lname"><br><br>
                            <label for="address">Address:</label><br>
                            <input  id="address" required="" type="text" name="address"><br><br>
                            <label for="email">Email:</label><br>
                            <input name="email" required="" id="email" type="email"><br><br>
                            <label for="username">Username:</label><br>
                            <input name="user" required="" id="username" type="text" ><br><br>
                            <label for="pass">Password:</label><br>
                            <input name="pass" required="" id="pass" type="password" ><br><br>
                            <label for="pass">Retype Password:</label><br>
                            <input name="rpass" required="" id="pass" type="password" ><br><br>
                            <button name="cbutton" class="btn btn-success">Register</button>
                            <a href="index.php" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
                <div class="panel-footer">
                    © 2017 Home Furniture Website All Rights Reserved | Design by King doh
                </div>
            </div>
        </div>
    </div>

    <?php  

    include "Connection.php";

    if(isset($_POST['cbutton'])){

    	$fname = $_POST['fname'];
    	$lname = $_POST['lname'];
    	$address = $_POST['address'];
        $username = $_POST['user'];
        $pass = md5($_POST['pass']);
        $rpass = md5($_POST['rpass']);
        $email = $_POST['email'];

        if($pass == $rpass){
            $sql = "INSERT clientaccounts VALUES(null,'$fname','$lname','$address','$email','$username', '$pass')";

            if($con->query($sql)){
                echo "<script>alert('Register Complete!')</script>";
                echo "Register Complete!";
            }
        }
        else{
            echo "Password mismatch!";
        }

    }
    ?>

    </body>
    </html>