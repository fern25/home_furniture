<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
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

                    <li class="active">
                        <a href="custRegister.php">Sign Up</a>
                    </li>
                    <li >
                        <a href="custLogin.php">Login</a>
                    </li>
                </ul>    
            </div>
        </div>
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-default">
                <div class="navbar navbar-inverse">
                    <center>
                        <h4 style="color: white">Registration</h4>
                    </center>

                    <!-- <a href="custLogin.php" class="btn btn-warning">Login</a>
                    <a href="custRegister.php" class="btn btn-success">Register</a>
                    <a href="custResetPass.php" class="btn btn-warning">Reset Password</a> -->
                </div>
                <div class="panel-body">

                    <div class="col-sm-12">

                        <div class="col-sm-6">
                            <label for="fname">First Name:</label>
                        </div>
                        <div class="col-sm-6">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col-sm-6">
                            <input  id="fname" required="" type="text" name="fname">
                        </div>
                        <div class="col-sm-6">
                            <input name="user" required="" id="username" type="text" >
                        </div>
                        <div class="col-sm-12"><br></div>

                        <div class="col-sm-6">
                            <label for="lname">Last Name:</label>
                        </div>
                        <div class="col-sm-6">
                            <label for="pass">Password:</label>
                        </div>
                        <div class="col-sm-6">
                            <input  id="lname" required="" type="text" name="lname">
                        </div>
                        <div class="col-sm-6">
                            <input name="pass" required="" id="pass" type="password" >
                        </div>
                        <div class="col-sm-12"><br></div>
                        <div class="col-sm-6">
                            <label for="address">Address:</label>
                        </div>
                        <div class="col-sm-6">
                            <label for="pass1">Retype Password:</label>
                        </div>
                        <div class="col-sm-6">
                            <input  id="address" required="" type="text" name="address">
                        </div>
                        <div class="col-sm-6">
                           <input name="rpass" required="" id="pass1" type="password" >
                       </div>
                       <div class="col-sm-12"><br></div>
                       <div class="col-sm-12">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-sm-6">
                        <input  id="email" required="" type="email" name="email">
                    </div>

                    <div class="col-sm-12"><br></div>
                    <div class="col-sm-12">
                        <center>
                            <button name="cbutton" id="btn_register" class="btn btn-primary">Register</button>
                            <a href="index.php" class="btn btn-primary">Cancel</a>
                        </center>
                    </div>
                </div>
            </div>
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
        $("#fname").focus();

//trigger key if input keydown on textbox btn_register
$("#fname").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#lname").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#address").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#username").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#pass").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#pass1").keydown(function(e){
    if(e.keyCode ==13){

        $("#btn_register").trigger("click");
    }
});
$("#email").keydown(function(e){
    if(e.keyCode ==13){
        $("#btn_register").trigger("click");
    }
});


$("#btn_register").click(function(){

    if($("#fname").val() == "" ||$("#lname").val() == "" ||$("#address").val() == "" ||$("#username").val() == "" ||$("#pass").val() == "" ||$("#pass1").val() == "" ||$("#email").val() == ""){

        $.bootstrapGrowl('You must put data into the fields to proceed',{
            type: 'warning',
            delay: 2000,
        });

    }
    else{

        $.ajax({
            url: "check_user.php",
            type: "post",
            cache: false,
            data: {
                "request":1,
                "user": $("#username").val()
            },
            success: function(data){
                if(data == "exist"){

                    $("#username").focus();
                    
                    $.bootstrapGrowl('Username already exist',{
                        type: 'warning',
                        delay: 2000,
                    });
                }
                else{

                    $.ajax({
                        url: "php_register.php",
                        cache: false,
                        type: "post",
                        data: {
                            "request":1,
                            "fname": $("#fname").val(),
                            "lname": $("#lname").val(),
                            "address":$("#address").val(),
                            "user": $("#username").val(),
                            "pass": $("#pass").val(),
                            "rpass": $("#pass1").val(),
                            "email": $("#email").val()
                        },
                        success:function(data){
                            if(data == "success"){
                             $("#fname").focus();
                             $("#fname").val("");
                             $("#lname").val("");
                             $("#address").val("");
                             $("#username").val("");
                             $("#pass").val("");
                             $("#pass1").val("");
                             $("#email").val("");
                             $.bootstrapGrowl('Register Complete',{
                                type: 'success',
                                delay: 2000,
                            });
                         }
                         else{
                            $("#pass").val("");
                            $("#pass1").val("");

                            $("#pass").focus();
                            $.bootstrapGrowl(data,{
                                type: 'danger',
                                delay: 2000
                            });
                        }
                    }
                });
                }
            }
        });
    }
});
});
</script>

</body>
</html>