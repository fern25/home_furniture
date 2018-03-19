<?php  

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="js/accounting.min.js"></script>
	<style type="text/css">
	body{
		background-image: url("bg/product_bg.jpg");
		background-attachment: fixed;
		font-family: "courier new";
		background-repeat: no-repeat;
		background-size: cover;
	}
	div#comment_sec{
		overflow: auto;
		
		text-align:left;
		width: 100%;
		height: 500px;
	}
	label{
		font-size: 150%;
	}

</style>
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<center>
						<h2>Your Current Tracking Numbers:</h2>
					</center>
				</div>
			</div>

			<?php 


			include "Connection.php";


			$sql = "SELECT * FROM orders where isPaid = 0";

			$result = $con->query($sql);
			if($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {

					$ispaid = "";

					if($row['isPaid'] == 1){

						$ispaid = "YES";
					}else{
						$ispaid = "NO";
					}

					echo "
					<div class='panel panel-default'>
					<div class='panel-heading'>
					<center>
					<form method='post' action='handling_order.php'>
					<input type='text' value='$row[tracking_no]' name='idno' class='hidden'>
					<h3 class='text-success'><b><span name='id'>$row[tracking_no]</span></b> : is paid?-> 
					<button class='btn btn-success' name='paid'>Click to paid</button>
					<button class='btn btn-danger' name='reject'>Reject Order</button>
					</h3>
					</form>
					</center>
					</div>
					</div>
					";
				}
			}

			?>



		</div>
	</div>
</body>
</html>