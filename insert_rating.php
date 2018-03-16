<?php

include "Connection.php";

if(isset($_POST['request'])){

	$id = $_POST['id'];
	$custid = $_POST['custID'];
	$rate = $_POST['Rate'];

	$sql = "INSERT INTO ratings values(null,$custid,$id, $rate)";

	if($con->query($sql)){
		echo "Rating inserted";
	}
	else
	{
		echo "Data inserted failed";
	}
}





?>