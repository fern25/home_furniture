<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <!--<link rel="stylesheet" type="text/css" href="regstyle.css">-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body style="background: url('bg.png');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Reset Password Admin Panel</h4>
                    <a href="LoginAdmin.php" class="btn btn-warning">Login Panel</a>
                    <a href="Registration.php" class="btn btn-warning">Register Panel</a>
                    <a href="resetpass.php" class="btn btn-success">Reset Password Panel</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <label for="username">Username:</label><br>
                        <input id="username" type="text" name=""><br><br>
                        <label for="pass">Old Password:</label><br><br>
                        <input id="pass" type="password" name=""><br><br>
                        <label for="pass">New Password:</label><br><br>
                        <input id="pass" type="password" name=""><br><br>
                        <label for="pass">Retype New Password:</label><br><br>
                        <input id="pass" type="password" name=""><br><br>
                        <button class="btn btn-success">OK</button>
                        <button class="btn btn-danger">Cancel</button>
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

    

    ?>
</body>
</html>