<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<style type="text/css">


</style>
</head>
<body>
	<?php  

	include "Connection.php";

	if(isset($_GET['id'])){
		$pid = $_GET['id'];

		$sql = "SELECT * from products where id = '$pid'";

		$result = $con->query($sql);
		if($result->num_rows >0){
			while ($row = $result->fetch_assoc()) {
				echo "

				<br>
				<div class='container'>
				<div class='col-sm-1'></div>
				<div class='col-sm-10' style='background-color: #aaa;border-radius: 5px'>
				<br>
				<div class='col-sm-12'>
				<div class='col-sm-6'>
				<h4>$row[pname] </h4>
				<hr>
				<img src='img/$row[img]' class='img-responsive' width='450' height='200'>
				<br>
				</div>

				<div class='col-sm-6'>
				<div class='panel panel-info'>
				<div class='panel-heading'>
				<h3>Product Description</h3>
				</div>
				</div>
				</div>
				<div class='col-sm-6'>
				<div class='panel panel-default'>
				<div class='panel-heading'>
				<h4>$row[description]</h4>
				<h4 class='text-danger'>Price: $row[price]</h4>
				</div>
				</div>
				</div>
				<div class='col-sm-12'>
				<div class='panel panel-default' style='text-align:center; align-content: center;'>
				<div class='panel-heading'>
				<h4>RATING</h4>
				<img src='pictures/gstar.png' width='50'>
				<img src='pictures/gstar.png' width='50'>
				<img src='pictures/gstar.png' width='50'>
				<img src='pictures/gstar.png' width='50'>
				<img src='pictures/gstar.png' width='50'>
				</div>
				</div>
				</div>
				<div class='col-sm-12'>
				<div class='panel panel-default' style='text-align:center; align-content: center;'>
				<div class='panel-heading'>
				<h4>Product Comments</h4>

				<div class='col-sm-2'></div>
				<div class='panel panel-info'>
				<div class='panel-heading'>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				<h4>Comment Section</h4>
				</div>
				</div>
				<textarea style='text-align: left; width: 600px; height: 150px;'></textarea>
				<br>
				<button class='btn btn-success'>Submit Comment</button>
				</div>
				</div>
				</div>

				</div>
				<div class='col-sm-12'><br></div>
				</div>

				</div>

				";
			}
		}
	}

	?>
	

</body>
</html>