<?php  

include "Connection.php";

if(isset($_POST['request'])){

    $username = $_POST['user'];

    $user = mysqli_real_escape_string($con,$username);

    $sql = "SELECT * FROM clientaccounts where custusername ='$user'";

    $result=$con->query($sql);
    if($result->num_rows>0){

            echo "exist";
    }
    else{
        echo "not exist";
    }

}

?>