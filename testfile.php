<?php  

include "Connection.php";

$id['ids'] = array();
$comments['coms'] = array();
$content = array();

	$sql = "SELECT * FROM comments";

	$result=$con->query($sql);
	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()) {

			$custid =  $row['username'];
			$comm =  $row['Comments'];

			array_push($id['ids'],$custid);
			array_push($comments['coms'], $comm);
		}

		array_push($content, $id['ids'],$comments['coms']);
		echo json_encode($content);
	}

?>