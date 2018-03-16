<?php  

include "Connection.php";

if(isset($_POST['request'])){

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $address = $_POST['address'];
 $username = $_POST['user'];
 $pass = md5($_POST['pass']);
 $rpass = md5($_POST['rpass']);
 $email = $_POST['email'];

 if($pass == $rpass){
    $sql = "INSERT clientaccounts VALUES(null,'$fname','$lname','$address','$email','$username','$pass')";

    if($con->query($sql)){
        echo "success";
    }
}
else{
    echo "Password mismatch!";
}

}
?>