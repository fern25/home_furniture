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
		overflow-y: scroll;
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
						<a href="logoutclient.php">Logout</a>
					</li>
				</ul>
			</ul>
		</div>
	</div>
	<?php  

	include "Connection.php";

	if(isset($_GET['id'])){
		$pid = $_GET['id'];
		$_SESSION['pid'] = $pid;

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
				<form method='post' action='insert_cart.php'>
				<h1>$row[pname] </h1>
				<hr>
				<div class='col-sm-6'>

				<img src='img/$row[img]' class='img-responsive' width='450' height='200'>
				</div>

				<div class='col-sm-6'>
				<h4 class='text-default'>$row[description]</h4>
				<hr>
				<h4 class='text-danger' id='price'>Price: ₱".
				number_format($row['price'],2)
				."</h4>
				<button class='btn btn-warning' name='add_cart'>Add to cart</button>	
				</form>
				</div>
				<div class='col-sm-12'>
				<hr>";
			}
		}
		else{

		}
	}

	?>
	<div id='rate content'>
		<h4>Rate this Items</h4>
		<h3 id="rated" class="hidden">
			You rate this item: <span class="text text-success" id="rateno"></span>
		</h3>
		<h4 id="done_rate" class="hidden">Thank you for rating this item your rating will be submitted immediately</h4>
		<p id="not_rated">
			<img id='s1' src='pictures/gstar.png' style='cursor: pointer' width='50'>
			<img id='s2' src='pictures/gstar.png'  style='cursor: pointer'  width='50'>
			<img id='s3' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
			<img id='s4' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
			<img id='s5' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
		</p>
	</div>


	<hr>
</div>
<div class='col-sm-12'>
	<div class='navbar navbar-inverse' style='text-align:center; align-content: center;'>
		<div class='panel-heading' style="color: white">
			<h4>Product Comments/ Asked about the Products</h4>
			<hr>
			<div class='col-sm-2'></div>
			<div id="comment_sec">
				<!-- all comments should pbe populated here -->
			</div>
		</div>
	</div>
	<h3 style="color: green;" class="hidden" id="com_notif">Comment successfully added!</h3>
	<textarea placeholder='Place your comment here to this product' id="txt_comment" style='text-align: left; width: 600px; height: 150px;'></textarea>
	<br><br>
	<button class='btn btn-success' id="btn_submit">Submit Comment</button>
</div>


</div>
<div class='col-sm-12'><br></div>
</div>

</div>

</div>
<h1 class="" id="cust_id"><?php if(isset($_GET['id'])){echo $_GET['id'];} ?></h1>
<h1 class="hidden" id="my_id"><?php echo $_SESSION['cid'];?></h1>

<script type="text/javascript" src="js/rating.js"></script>
<script type="text/javascript" src="js/rating-actions.js"></script>
<script type="text/javascript" src="js/live_comment.js"></script>
<script type="text/javascript" src="js/commenter.js"></script>
</body>
</html>