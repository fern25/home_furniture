<?php  

session_start();
include "Connection.php";

if(isset($_POST['request'])){

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

        }
            echo "success";
    }
    else{
        echo "Login Failed please try again!";
    }

}

?>