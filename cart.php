<?php  

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Client Order Items</title>
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
	label{
		font-size: 16px;
	}

</style>
</head>
<body>
	<div class="container">
		<div class="col-sm-12" style="background-color: #BDBDBD; border-radius: 5px;">

			<div class="col-sm-12">
				<h4 style="text-align: center">My Shopping Cart</h4>
				<h5><a class="btn btn-primary" href="account.php">Continue Shopping</a></h5>
				<hr>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<label>Item Name</label>
				</div>
				<div class="col-sm-2">
					<label>Item Price</label>
				</div>
				<div class="col-sm-2">
					<label>Qty</label>
				</div>
				<div class="col-sm-2">
					<label>Subtotal</label>
				</div>
				<div class="col-sm-12">
				</div>
			</div>
			<!-- dri akuang products -->
			<?php  

			include "Connection.php";

			$total =0;

			$sql = "SELECT * from clientitem where cid=$_SESSION[cid]";

			$result=$con->query($sql);
			if($result->num_rows > 0){
				while ($row = $result->fetch_assoc()) {

					$subtotal = $row['qty']*$row['item_price'];
					$total += $subtotal;

					echo "

					<div class='col-sm-12' style='background-color: #F8F8F8; border-radius: 5px; padding: 15px 15px'>
					<div class='col-sm-2'>
					<img src='img/".$row['item_img']."' width='100' height='100'>
					</div>
					<div class='col-sm-4'>
					<h4>"  .$row['item_desc'].   "</h4>
					</div>
					<div class='col-sm-2'>
					<h4>₱".number_format($row['item_price'],2)."</h4>
					</div>
					<div class='col-sm-2'>
					<h4>".$row['qty']."</h4>
					</div>
					<div class='col-sm-2'>
					<h4>
					₱".number_format($subtotal,2)."
					</h4>
					</div>
					</div>
					<div class='col-sm-12'><br></div>



					";
				}
				echo "

				<div class='col-sm-12'>
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-4'>
				</div>
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-2'>
				<h4>
				Total Value:
				</h4>
				</div>
				<div class='col-sm-2'>
				<h4>

				₱".number_format($total,2)."

				</h4>
				</div>
				</div>

				<div class='col-sm-12'><br></div>

				<div class='col-sm-12'>
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-4'>
				</div>
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-2'>
				</div>
				<div class='col-sm-2'>
				<a href='' class='btn btn-success'>Checkout</a>
				</div>
				</div>

				<div class='col-sm-12'><br></div>

				";
			}


			?>

		</div>

	</div>
</body>
</html>