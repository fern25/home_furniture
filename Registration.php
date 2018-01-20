<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="regstyle.css"> -->
    <title>Administrator</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
       <!--  <style>
            html {
			background-color: #2962FF;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
            background-size: cover;
        }
    </style> -->
</head>
<body style="background: url('bg.png');background-repeat: no-repeat;background-size: cover;">

    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Registartion Admin Panel</h4>
                    <a href="LoginAdmin.php" class="btn btn-warning">Login Panel</a>
                    <a href="Registration.php" class="btn btn-success">Register Panel</a>
                    <a href="resetpass.php" class="btn btn-warning">Reset Password Panel</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="name">Name:</label><br>
                            <input  id="name" type="text" name="name"><br><br>
                            <label for="email">Email:</label><br>
                            <input name="email" id="email" type="email"><br><br>
                            <label for="username">Username:</label><br>
                            <input name="user" id="username" type="text" ><br><br>
                            <label for="pass">Password:</label><br>
                            <input name="pass" id="pass" type="password" ><br><br>
                            <label for="pass">Retype Password:</label><br>
                            <input name="rpass" id="pass" type="password" ><br><br>
                            <button name="sbutton" class="btn btn-success">Login</button>
                            <button class="btn btn-danger">Cancel</button>
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

    if(isset($_POST['sbutton'])){

        $username = $_POST['user'];
        $pass = $_POST['pass'];
        $rpass = $_POST['rpass'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        if($pass == $rpass){
            $sql = "INSERT INTO adminaccounts VALUES(null,'$name','$email','$username','$pass')";

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
       <!--  <div class="bgreg">
        <div class="reg">
        <ol><a href="LoginAdmin.php">LOGIN</a></ol>
        <ol><a class="active" href="Registration.php">REGISTER</a></ol>
        <ol><a href="Resetpass.php">RESET PASSWORD</a></ol>
        </div>
        <div class="acc">
            <form action="" method="post">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="text" name="user" placeholder="Username" required><br><br>
            <input type="password" name="pass" placeholder="Password" required><br><br>
            <input type="password" name="confirmpass" placeholder="Confirm Password" required><br><br>
            <input class="btn" type="submit" name="btncreate" value="Create Account"/>
    </form>
<?php
    include 'Connection.php';
    if($_POST){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $upass=$_POST['confirmpass'];
        $result=$con->query("select Ausername from adminaccounts where Ausername='$user'");
        if($pass==$upass){
            if($result->num_rows>0){
                echo 'user is already taken';
            }else{
                if($con->query("insert into adminaccounts values(idNo,'$name','$email','$user','$pass')")){
                    echo 'Registration success';
                }
            }
        }else{
            echo 'Password doesn`t match';
        }
    }
        
        
    ?>
            
        </div>
        </div>
        <footer>© 2017 Home Furniture Website All Rights Reserved | Design by King doh</footer> -->
    </body>
    </html>