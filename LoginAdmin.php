<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrator</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

        
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
    
</body>
</html>