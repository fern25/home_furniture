<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <!--<link rel="stylesheet" type="text/css" href="regstyle.css">-->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

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
<body style="background: url('bg.png');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Login Admin Panel</h4>
                    <a href="LoginAdmin.php" class="btn btn-success">Login Panel</a>
                    <a href="Registration.php" class="btn btn-warning">Register Panel</a>
                    <a href="resetpass.php" class="btn btn-warning">Reset Password Panel</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="username">Username:</label><br>
                            <input id="username" type="text" name="user"><br><br>
                            <label for="pass">Password:</label><br>
                            <input id="pass" type="password" name="pass"><br><br>
                            <button name="login" class="btn btn-success">Login</button>
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

    if(isset($_POST['login'])){

        $username = $_POST['user'];
        $password = $_POST['pass'];

        $user = mysqli_real_escape_string($con,$username);
        $pass = mysqli_real_escape_string($con,$password);

        $sql = "SELECT * FROM adminaccounts where Ausername ='$user' and Apassword='$pass'";

        $result=$con->query($sql);
        if($result->num_rows>0){
            while ($row=$result->fetch_assoc()) {

                $_SESSION['user'] =$row['Ausername'];
                $_SESSION['pass'] =$row['Apassword'];

                header("location:AdminPanel.php?welcome=useradmin");
            }
        }
        else{
            echo "<script>alert('Username or password failed!')</script>";
        }

    }




    ?>
    <!-- <div class="container">
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
    </div> -->
</body>
</html>