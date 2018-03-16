<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jqueryy/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>

    <link rel="stylesheet" type="text/css" href="loading_animation.css">
</head>
<body style="background: url('bg/bg2.jpg');background-repeat: no-repeat;background-size: cover;font-family: 'courier new'">
    <div class="container">
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">Home Furniture</a>
                </div>
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php">Items</a>
                    </li>
                    <li >
                        <a href="services_not_login.php">Services</a>
                    </li>
                    <li>
                        <a href="contact_not_login.php">Contact us</a>
                    </li>


                </ul>    
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a href="custRegister.php">Sign Up</a>
                    </li>
                    <li class="active">
                        <a href="custLogin.php">Login</a>
                    </li>
                </ul>    
            </div>
        </div>
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="navbar navbar-inverse">
                    <center>
                        <h4 style="color: red" id="msg"></h4>
                    </center>
                    <center>
                        <h4 style="color: white">Login</h4>
                    </center>
                    <!-- <a href="custLogin.php" class="btn btn-success">Login</a>
                    <a href="custRegister.php" class="btn btn-warning">Register</a>
                    <a href="custResetPass.php" class="btn btn-warning">Reset Password</a> -->
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-7">
                        <label for="username">Username:</label><br>
                        <input id="username" type="text" name="user">
                        <br><br>
                        <label for="pass">Password:</label><br>
                        <input id="pass" type="password" name="pass"><br><br>
                        <button name="clogin" id="btn_login" class="btn btn-primary">Login</button>
                        <a href="index.php" class="btn btn-primary">Cancel</a>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <span id="loader" class="glyphicon glyphicon-refresh glyphicon-refresh-animate hidden"></span>
                    </div>
                </div>
                <br>
                <div class="panel-footer">
                    <center>
                        © 2017 Home Furniture Website All Rights Reserved | Design by King doh
                    </center>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $("#username").focus();
            
            //keypress for trigger to click btn_login
            $("#pass").keydown(function(e){
                if(e.keyCode == 13){
                    $("#btn_login").trigger("click");
                }
            });
            $("#username").keydown(function(e){
                if(e.keyCode == 13){
                    $("#btn_login").trigger("click");
                }
            });

            $("#btn_login").click(function(){

                $.ajax({
                    type: "post",
                    url: "php_login_admin.php",
                    cache: false,
                    data: {
                        "request": 1,
                        "user": $("#username").val(),
                        "pass": $("#pass").val()
                    },
                    success: function(data){
                        if(data == "success"){
                            window.location.href='index.php';
                        }
                        else{
                            $("#pass").val("");
                            $("#username").val("");
                            $("#username").focus();
                            //floating notifier
                            $.bootstrapGrowl('Login failed please try again',{
                                type: 'danger',
                                delay: 2000,

                            });
                        }
                    }
                });
                
            });
        });
    </script>
    
    
</body>
</html>