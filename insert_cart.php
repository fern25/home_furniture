<?php  

session_start();
include "Connection.php";

if(isset($_POST['add_cart'])){

	$sql = "SELECT * from clientitem where pid=$_SESSION[pid] and cid=$_SESSION[cid]";

	$result=$con->query($sql);
	if($result->num_rows > 0){
		$sql = "UPDATE clientitem set qty=qty+1 where pid=$_SESSION[pid] and cid=$_SESSION[cid]";

		if($con->query($sql)){	
			echo "PRODUCT INSERTED SUCCESSFULLY!";
			$_SESSION['pid'] = 0;
			header("location:account.php?msg=insertsuccess");
		}
	}
	else{

		$sql = "SELECT * from products where id=$_SESSION[pid]";
		print_r(getdate());

		$result=$con->query($sql);
		if($result->num_rows > 0 ){
			while ($row = $result->fetch_assoc()) {

				$sql = "INSERT into clientitem values(null,$_SESSION[pid],$_SESSION[cid],'$row[pname]',$row[price],1,'$row[img]')";

				if($con->query($sql)){	
					echo "PRODUCT INSERTED SUCCESSFULLY!";
					$_SESSION['pid'] = 0;
					header("location:account.php?msg=insertsuccess");
				}
			}
		}
		
	}
}

?>