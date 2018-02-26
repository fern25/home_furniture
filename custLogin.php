<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

        
</head>
<body style="background: url('bg/bg2.jpg');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <br>
        <div class="col-sm-3"></div>
        <div class="col-sm-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Login</h4>
                    <a href="custLogin.php" class="btn btn-success">Login</a>
                    <a href="custRegister.php" class="btn btn-warning">Register</a>
                    <a href="custResetPass.php" class="btn btn-warning">Reset Password</a>
                </div>
                <div class="panel-body">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-5">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <label for="username">Username:</label><br>
                            <input id="username" type="text" name="user"><br><br>
                            <label for="pass">Password:</label><br>
                            <input id="pass" type="password" name="pass"><br><br>
                            <button name="clogin" class="btn btn-success">Login</button>
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

    if(isset($_POST['clogin'])){

        $username = $_POST['user'];
        $password = $_POST['pass'];

        $user = mysqli_real_escape_string($con,$username);
        $pass = mysqli_real_escape_string($con,md5($password));

        $sql = "SELECT * FROM clientaccounts where custusername ='$user' and custpassword='$pass'";

        $result=$con->query($sql);
        if($result->num_rows>0){
            while ($row=$result->fetch_assoc()) {

                $_SESSION['cid'] = $row['custID'];
                $_SESSION['cuser'] =$row['custusername'];
                $_SESSION['cpass'] =$row['custpassword'];

                header("location:account.php?welcome=client");
            }
        }
        else{
            echo "<script>alert('Username or password failed!')</script>";
        }

    }




    ?>
    
</body>
</html>