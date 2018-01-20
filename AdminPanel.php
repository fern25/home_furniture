<!DOCTYPE html>
<?php
session_start();

$email = "";
if(isset ($SESSION['pass'])){
     $email = $SESSION['pass'];
    echo $email;
}
else{
   // header('location:LoginAdmin.php');
}
?>

<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" type="text/css" href="regstyle.css">
        <style>
            html {
			background-color: #2962FF;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
            background-size: cover;
        }
        
        footer{
            color: white; 
            text-align: center;
            padding-top: 27em;
            padding-bottom: 5em;
            }
        </style>
    <body>
        <div class="panel">
            <h1>Welcom to Admin Panel</h1>
            <h2>Home Furniture</h2>
        </div>
        <div class="content">
            <div class="function">
            <li><a href="Add.php">ADD</a></li>
            <li><a href="Delete.php">DELETE</a></li>
            <li><a href="Update.php">UPDATE</a></li>
            <li><a href="Search.php">SEARCH</a></li>
            <li><a href="Update.php">VIEW ORDER ITEMS</a></li>
            <li><a href="Update.php">LOG OFF</a></li>
            </div>
        </div>
        <footer>© 2017 Home Furniture Website All Rights Reserved | Design by King doh</footer>
    </body>
</html>