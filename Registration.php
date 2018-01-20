<!DOCTYPE html>
<html>
    <head>
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="regstyle.css">
        <style>
            html {
			background-color: #2962FF;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
            background-size: cover;
        }
        </style>
    </head>
    <body>
        <div class="bgreg">
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
        <footer>© 2017 Home Furniture Website All Rights Reserved | Design by King doh</footer>
    </body>
</html>