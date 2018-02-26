<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location:LoginAdmin.php?msg=blocklogin!");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>View Client Order</title>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="adminpanel.css"> -->
    <style type="text/css">
    </style>
</head>
<body style="background: url('bg.png');background-repeat: no-repeat;background-size: cover;">
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
    <div class="col-sm-12" style="background-color: #BDBDBD; border-radius: 5px;">

			<div class="col-sm-12">
				<h4 style="text-align: center">Client Order Items</h4>
                <hr>

            </div>
        </div>
        
</body>
</html>