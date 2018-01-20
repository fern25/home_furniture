<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="homefurniture";

$con=new mysqli($servername, $username, $password, $dbname);

if(!$con)
{
    die("Connection Failed".$con->connect_error);
}
?>