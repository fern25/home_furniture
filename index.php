
<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="js/accounting.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-waitingfor/1.2.7/bootstrap-waitingfor.min.js"></script>
	<style type="text/css">

	img{
		border-radius: 5px;
	}
	a{
		color: black;
		cursor: pointer;
	}
	a:hover{
		text-decoration: none;
	}

	body{
		background: url('bg/bg2.jpg');
		background-size: cover;
		font-family: "courier new";
	}

</style>
</head>
<body>


	

	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="" class="navbar-brand">Home Furniture</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="index.php">Items</a>
					</li>
					<li >
						<a href="services_not_login.php">Services</a>
					</li>
					<li>
						<a href="contact_not_login.php">Contact us</a>
					</li>


				</ul>
				<ul class="nav navbar-nav navbar-right">

					<li>
						<a href="custRegister.php">Sign Up</a>
					</li>
					<li>
						<a href="custLogin.php">Login</a>
					</li>
				</ul> 	 
			</div>
		</div>


		<br><br><br><br><br>

		<?php 

		include "Connection.php";

		$sql = "SELECT * from products";

		$result=$con->query($sql);
		if($result->num_rows>0){
			while ($row= $result->fetch_assoc()) {
				echo "

				<div class='col-sm-3'>
				<a href='custLogin.php'>
				<div class='panel panel-default'>
				<div class='panel-heading'>
				<img class='img-rounded' style='height:190px; width: 190px;' src='img/$row[img]'>
				<br><br>

				<label>$row[pname]</label>
				<h4 style='color: orange' id='price' class='my_price'>₱".
				number_format($row['price'],2)
				."</h4>
				<button class='btn btn-success' >View</button>
				</div>
				</div>
				</a>
				</div>
				";
			}
		}
		?>
	</div>
</body>
</html>