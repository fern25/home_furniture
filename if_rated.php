<?php  


include "Connection.php";

if(isset($_POST['request'])){

    $cid = $_POST['id'];
    $pid = $_POST['pid'];

    $sql = "SELECT * FROM ratings where custID ='$cid' and id='$pid'";

    $result=$con->query($sql);
    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()) {

            echo $row['Rate'];
        }
    }
    else{

    }

}

?>