<?php

session_start();

if(!isset($_SESSION['auser'])){
    header("location:LoginAdmin.php?msg=blocklogin!");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Client Order</title>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="adminpanel.css"> -->
    <style type="text/css">
</style>
</head>
<body style="background: #555;">
    <div class="container">
        <div class="col-sm-12"></div>
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Admin Panel</a>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="AdminPanel.php">Add Item</a>
                </li>
                <li>
                    <a href="UpdatePanel.php">Update Item</a>
                </li>
                <li class="active">
                    <a href="ViewItemOrder.php">View Order Item</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <center>
                    <h2>Your Current Tracking Numbers:</h2>
                </center>
            </div>
        </div>

        <?php 


        include "Connection.php";


        $sql = "SELECT * FROM orders where isPaid = 0";

        $result = $con->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {

                $ispaid = "";

                if($row['isPaid'] == 1){

                    $ispaid = "YES";
                }else{
                    $ispaid = "NO";
                }

                echo "
                <div class='panel panel-default'>
                <div class='panel-heading'>
                <center>
                <form method='post' action='handling_order.php'>
                <input type='text' value='$row[tracking_no]' name='idno' class='hidden'>
                <img src='img/$row[item_img]' class='img-rounded' width=150 height =150>
                <h3 class='text-success'><b><span name='id'>$row[tracking_no]</span></b> : is paid?-> 
                <button class='btn btn-success' name='paid'>Click to paid</button>
                <button class='btn btn-danger' name='reject'>Reject Order</button>

                </h3>
                </form>
                </center>
                </div>
                </div>
                ";
            }
        }

        ?>



    </div>
</div>

</body>
</html>