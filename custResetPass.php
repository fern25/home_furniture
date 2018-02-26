<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Reset Password</title>
    <!--<link rel="stylesheet" type="text/css" href="regstyle.css">-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body style="background: url('bg/bg2.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Reset Password</h4>
                    <a href="custLogin.php" class="btn btn-warning">Login</a>
                    <a href="custRegister.php" class="btn btn-warning">Register</a>
                    <a href="custResetPass.php" class="btn btn-success">Reset Password</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <form action="custreset.php" method="post">
                            <label for="username">Username:</label><br>
                            <input id="username" type="text" name="user"><br><br>
                            <label for="pass">Old Password:</label><br><br>
                            <input id="pass" type="password" name="oldpass"><br><br>
                            <label for="pass">New Password:</label><br><br>
                            <input id="pass" type="password" name="newpass"><br><br>
                            <label for="pass">Retype New Password:</label><br><br>
                            <input id="pass" type="password" name="repass"><br><br>
                            <button class="btn btn-success">OK</button>
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
    
</body>
</html>