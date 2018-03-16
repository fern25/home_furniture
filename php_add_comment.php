<?php

session_start();
include "Connection.php";

if(isset($_POST['request'])){

	$comments = $_POST['comments'];
	$custid = $_POST['custID'];
	$comID = $_POST['comID'];

	$sql = "INSERT INTO comments values(null,$custid,'$_SESSION[cuser]',$comID,'$comments',now())";

	if($con->query($sql)){
		echo "success";
	}
	else
	{
		echo "failed";
	}
}

?>