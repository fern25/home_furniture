<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="js/accounting.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
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
	ul#nav{

		left: 10%;
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
				<li>
					<a href="">
						<span class="glyphicon glyphicon-shopping-cart">
						</span> Shopping Cart <span class="badge badge-light">1</span>
					</a>
				</li>
			</ul>
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
				<a href='product_view.php?id=$row[id]'>
				<div class='panel panel-default'>
				<div class='panel-heading'>
				<img src='img/$row[img]' width='200' height='100'>
				<br><br>

				<label>$row[pname]</label>
				<h4 style='color: orange' id='price' class='my_price'>₱".
				
				number_format($row['price'])
				.".00</h4>
				<button class='btn btn-success'>View</button>
				</div>
				</div>
				</a>
				</div>
				";
			}
		}
		?>
		<script type="text/javascript">

				for($i =0;$i<2;$i++){

					console.log(accounting.formatMoney($("#price").text()));
				}
		</script>

	</div>

</body>
</html>