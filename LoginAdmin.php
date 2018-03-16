<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jqueryy/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
    <style type="text/css">
    body{
        background-color: #555;
            /*background: url('bg.png');
            background-repeat: no-repeat;
            background-size: cover;*/
            font-family: 'courier new';
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="navbar navbar-inverse">
                    <center>
                        <h4 style="color: white">Login Admin Panel</h4>
                    </center>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <label for="username">Username:</label><br>
                        <input id="username" type="text" name="user"><br><br>
                        <label for="pass">Password:</label><br>
                        <input id="pass" type="password" name="pass"><br><br>
                        <button name="login" id="btn_login" class="btn btn-primary">Login</button>
                        <a href="index.php" class="btn btn-primary">Cancel</a>
                        
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

            $("#username").focus();
            $("#username").keydown(function(e){
                if(e.keyCode == 13){
                    $("#btn_login").trigger("click");
                }
            });
            $("#pass").keydown(function(e){
                if(e.keyCode == 13){
                    $("#btn_login").trigger("click");
                }
            });

            $("#btn_login").click(function(){

                $.ajax({
                 type: "POST",
                 url: "testfile.php",
                 cache: false,
                 data: {
                    "request":1
                 },
                 success: function(data){
                    
                    window.location.href='index.php';
                 }
             });
            });

        });
    </script>
    
</body>
</html>