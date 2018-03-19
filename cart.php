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

					<form action='$_SERVER[PHP_SELF]' method='post'>
					<input class='hidden' type='text' name='ids' value='$row[id]'>
					<button class='close' name='remove'>&times;</button>
					</form>
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
				

				";
			}


			?>
			<div class='col-sm-2'>
			</div>
			<div class='col-sm-3'>
			</div>
			<div class='col-sm-2'>
			</div>

			<div class='col-sm-2'>
			</div>

			<div class='col-sm-12'>
				<div class="navbar navbar-inverse" style="padding: 10px 10px 10px 10px">
					<input type="checkbox" id="tc" name="">
					<label for="tc" style="color: white">Please Check and Read The Terms and Condition Carefully</label>
					<div style="overflow: auto; height: 100px;color: white">

						Welcome to the Home Furniture platform. Please read these terms and conditions carefully. The following Terms of Use govern your use and access of the Platform (defined below) and the use of the Services. By accessing the Platform and/or using the Services, you agree to be bound by these Terms of Use. If you do not agree to these Terms of Use, do not access and/or use this Platform or the Services.
						<br>
						Access to and use of password protected and/or secure areas of the Platform and/or use of the Services are restricted to Customers with accounts only. You may not obtain or attempt to obtain unauthorized access to such parts of this Platform and/or Services, or to any other protected information, through any means not intentionally made available by us for your specific use.
						<br>
						If you are below 18 years old: you must obtain consent from your parent(s) or legal guardian(s), their acceptance of these Terms of Use and their agreement to take responsibility for: (i) your actions; (ii) any charges associated with your use of any of the Services or purchase of Products; and (iii) your acceptance and compliance with these Terms of Use. If you do not have consent from your parent(s) or legal guardian(s), you must stop using/accessing this Platform and using the Services.
					</div>
				</div>
			</div>
			<div class="col-sm-12"></div>

			<div class='col-sm-10'>
			</div>
			<div class='col-sm-2'>
				<form method="post" action="">
				<button id="checkout" disabled class='btn btn-primary'>Checkout</button>
				</form>
			</div>
		</div>
		<div class='col-sm-12'><br></div>
	</div>
	<?php  

	if(isset($_POST['remove'])){
		$id = $_POST['ids'];

		$sql = "DELETE FROM clientitem where id = $id";

		if($con->query($sql)){
			echo "<script>alert('Item Removed Success');window.location.href='cart.php'</script>";

		}
		else{
			echo "<script>alert('Item Removed Failed')</script>";
		}
	}

	?>
	<script type="text/javascript">
		$(document).ready(function(){

			$("#tc").click(function(){
				//console.log("Checked");
				if(this.checked == true){
					console.log("Checked");
					$("#checkout").removeAttr("disabled");
				}
				else{
					console.log("Not Checked!");
					$("#checkout").attr("disabled",true);
				}
			});
		});
	</script>
	<?php  

	include "Connection.php";

	$sql = "DELETE FROM clientitem where cid = $_SESSION[cid]";

	if($con->query($sql)){
		echo "<script>alert('Product checkout complete!')</script>";
	}

	?>
</div>
</body>
</html>