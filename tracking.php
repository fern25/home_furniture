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
		<div class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="account.php" class="navbar-brand">Home Furniture</a>
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a href="account.php">Items</a>
					</li>
					<li >
						<a href="services.php">Services</a>
					</li>
					<li>
						<a href="contact.php">Contact us</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="cart.php">
							<span class="glyphicon glyphicon-shopping-cart">
							</span> Shopping Cart 
							
							<?php  

							include "Connection.php";

							$sql = "SELECT sum(qty) as sumqty from clientitem where cid=$_SESSION[cid]";

							$result=$con->query($sql);
							if($result->num_rows > 0){
								while ($row =$result->fetch_assoc()) {
									echo "<span class='badge badge-light'>".$row['sumqty']."
									</span>";
								}
							}

							?>
						</a>
					</li>
					<li>
						<a href=""><?php echo $_SESSION['cuser']; ?></a>
					</li>
					<li>
						<a href="tracking.php">Tracking Numbers</a>
					</li>
					<li>
						<a href="logoutclient.php">Logout</a>
					</li>
				</ul>
			</ul>
		</div>
	</div>
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


		$sql = "SELECT * FROM orders where cid = $_SESSION[cid] ";

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
				<h3 class='text-success'><b>$row[tracking_no]</b> : is paid?-> <b>$ispaid</b></h3>
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