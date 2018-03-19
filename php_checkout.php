<?php  

session_start();

include "Connection.php";

if(isset($_POST['request'])){



	$sql = "SELECT * FROM clientitem where cid = $_SESSION[cid]";

	$result= $con->query($sql);
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			
			//INSERT INTO orders values(null,$_SESSION[cid],'$row[pid]',null,null,null,null
			$sql2 = "INSERT INTO orders VALUES (null,$_SESSION[cid],'$row[pid]','$row[item_desc]','$row[item_price]','$row[qty]','$row[item_img]',0)";

			if($con->query($sql2)){
				
				$sql = "DELETE FROM clientitem where cid = $_SESSION[cid]";

				if($con->query($sql)){
					echo "inserted";
				}
			}
			else{
				echo "insert failed";
			}
		}
	}
	
}

?>