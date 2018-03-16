<?php  

session_start();
include "Connection.php";

if(isset($_POST['request'])){

	$comID = $_POST['comID'];
    

	$id = array();
	$comments = array();
	$content = array();

    $sql = "SELECT * FROM comments where comID = '$comID' ORDER BY date_comment desc";

    $result=$con->query($sql);
    if($result->num_rows>0){

        while ($row=$result->fetch_assoc()) {

        	array_push($id, $row['username']);
        	array_push($comments, $row['Comments']);
        }

		array_push($content, $id,$comments);
        echo json_encode($content);
    }
    else{
        echo "failed";
    }

}

?>