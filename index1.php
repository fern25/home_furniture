<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<style type="text/css">
	img{
		border-radius: 5px;
	}
</style>
</head>
<body style="background: url('bg2.jpg');background-size: cover;">
	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="" class="navbar-brand">Home Furniture</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="">Items</a>
				</li>
				<li >
					<a href="">Services</a>
				</li>
				<li>
					<a href="">Contact us</a>
				</li>
				<li>
					<a href="">About Us</a>
				</li>
			</ul>
		</div>
		<br><br><br><br><br>
		<div class="col-sm-12">
			<?php 

			include "Connection.php";

			$sql = "SELECT * from products";

			$result=$con->query($sql);
			if($result->num_rows>0){
				while ($row= $result->fetch_assoc()) {
					echo "
					<div class='col-sm-3'>
					<a href='' class='btn btn-default'>
					<img src='img/$row[img]' width='100' height='100'>
					<br><br>
					<label>$row[pname]</label>
					<p style='color: orange'>₱$row[price]</p>
					</a>	
					</div>

					";
				}
			}

			?>

		</div>
	</div>
</body>
</html>