<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Administrator</title>
        <!--<link rel="stylesheet" type="text/css" href="regstyle.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!--<style>
            html {
			background-color: #2962FF;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
            background-size: cover;
        }
        </style>-->
    </head>
    <body>
        <div class="container">
        <div class="bgreg">
        <div class="reg">
            <div class="col-sm-12">
                <div class="col-sm-0">
        <a class="active" href="LoginAdmin.php">LOGIN</a>
                    </div>
                <div class="col-sm-2">
        <a  href="Registration.php">REGISTER</a>
                    </div>
                <div class="col-sm-4">
        <a href="Resetpass.php">RESET PASSWORD</a>
                    </div>
            </div>
            
        </div>
        <div class="acc">
            <form action="" method="post">
            
            <input type="text" name="user" placeholder="Username" required><br><br>
            <input type="password" name="pass" placeholder="Password" required><br><br>
           
            <input class="btnlogin btn btn-success" type="submit" name="btnlogin" value="LOGIN"/>
    </form>
            <?php
        include 'Connection.php';
        if($_POST){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $email = "";
            $result=$con->query("select * from adminaccounts where Ausername='$user' AND Apassword='$pass'");
            if($result->num_rows>0){
                while($row=$result->fetch_array()){
                     
                    if($row[1]==$pass){
                    
                       
                        $SESSION['pass'] == $pass;
                        header('location:AdminPanel.php');
                        echo 'Login success';
                    }else{
                        echo 'Wrong Password';
                    }
                    
                }
            }else{
                echo 'USERNAME OR PASSWORD INCORRECT';
            }
        }
    
    ?>

            
        </div>
        </div>
        <footer style="top:100px;position:absolute">© 2017 Home Furniture Website All Rights Reserved | Design by King doh</footer>
            </div>
    </body>
</html>