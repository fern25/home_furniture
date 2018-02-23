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

	}

</style>
</head>
<body>
	<div class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Home Furniture</a>
			</div>
			<ul class="nav navbar-nav">
				<li>
					<a href="index.php">Items</a>
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
						<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge badge-light">1</span></a>
					</li>
				</ul>
			</div>
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

						<h1>$row[pname] </h1>
						<hr>
						<div class='col-sm-6'>
						
						<img src='img/$row[img]' class='img-responsive' width='450' height='200'>
						</div>

						<div class='col-sm-6'>
						<h4 class='text-default'>$row[description]</h4>
						<hr>
						<h4 class='text-danger' id='price'>Price: $row[price]</h4>
						<button class='btn btn-warning'>Add to cart</button>	
						</div>
						<div class='col-sm-12'>
						<hr>
						<h3>RATING</h3>
						<img src='pictures/ystar.png' style='cursor: pointer' width='50'>
						<img src='pictures/ystar.png'  style='cursor: pointer'  width='50'>
						<img src='pictures/ystar.png'  style='cursor: pointer' width='50'>
						<img src='pictures/ystar.png'  style='cursor: pointer' width='50'>
						<img src='pictures/ystar.png'  style='cursor: pointer' width='50'>
						<hr>
						</div>
						<div class='col-sm-12'>
						<div class='panel panel-default' style='text-align:center; align-content: center;'>
						<div class='panel-heading'>
						<h4>Product Comments</h4>
						<hr>
						<div class='col-sm-2'></div>
						<div style='overflow-y: scroll;text-align:left; width: 100%;height: 500px;'>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectiontionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						<label style='font-size: 150%;'>Commenter Name</label>
						<br>
						Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section
						<br>
						<hr>

						</div>
						</div>
						</div>
						<textarea placeholder='Place your comment here to this product' style='text-align: left; width: 600px; height: 150px;'></textarea>
						<br><br>
						<button class='btn btn-success'>Submit Comment</button>
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

		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#price").text(accounting.formatMoney($("#price").text()));
			});
		</script>
	</body>
	</html>