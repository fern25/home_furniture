<?php  

    include "Connection.php";


            $user = $_POST['user'];
            $oldpass = $_POST['oldpass'];
            $newpass = md5($_POST['newpass']);
            $repass = md5($_POST['repass']);

            if($newpass == $repass){

                $sql = "UPDATE clientaccounts set custpassword = '$repass' where custusername='$user'";

                if($con->query($sql)){
                echo "<script>alert('Change Password Complete!')</script>";
            }
            header("location: custLogin.php");
        }
            else{
            echo "Password mismatch!";
        }
            


    ?>