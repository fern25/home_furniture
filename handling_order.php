<?php  


include "Connection.php";

if(isset($_POST['paid'])){
	$id = $_POST['idno'];

	$sql = "UPDATE orders set isPaid = 1 where tracking_no = $id";

	if($con->query($sql)){
		echo "<script>alert('Paid successfully done!')</script>";
		header("location:AdminTracker.php");
	}

}
else if(isset($_POST['reject'])){
	$id = $_POST['idno'];

	$sql = "DELETE FROM orders where tracking_no = $id";

	if($con->query($sql)){
		echo "<script>alert('Order reject success!')</script>";
		header("location:AdminTracker.php");
	}
}



?>