 <?php  

session_start();
include "Connection.php";

if(isset($_POST['request'])){

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $user = mysqli_real_escape_string($con,$username);
    $pass = mysqli_real_escape_string($con,$password);

    $sql = "SELECT * FROM admin where user ='$user' and pass='$pass'";

    $result=$con->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {

            $_SESSION['auser'] =$row['user'];
            $_SESSION['apass'] =$row['pass'];

        }
            echo "success";
    }
    else{
        echo "Login Failed please try again!";
    }

}

?>