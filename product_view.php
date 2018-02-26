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
				<hr>

				
				$sql = "SELECT * FROM ratings where custID=$_SESSION[idno] and custID=$_GET[code]";

				$result= $con->query($sql);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo "<hr>You rated this item: <span id='rate_text'>$row[Rate] stars</span></hr>";
					}
				}

				else{
					echo'
					<div id="rate content">
					<h4>Rate this Items</h4>
					<p>
					<img id='s1' src='pictures/gstar.png' style='cursor: pointer' width='50'>
					<img id='s2' src='pictures/gstar.png'  style='cursor: pointer'  width='50'>
					<img id='s3' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
					<img id='s4' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
					<img id='s5' src='pictures/gstar.png'  style='cursor: pointer' width='50'>
					</p>
					</div>
					';
					echo '
					<div class='hidden' id='done_rate'>
					<h4>Thank you for rating. Refresh to see your rate.</h4>
					</div>
					';
				}

				
				<hr>
				</div>
				<div class='col-sm-12'>
				<div class='panel panel-default' style='text-align:center; align-content: center;'>
				<div class='panel-heading'>
				<h4>Product Comments</h4>
				<hr>
				<div class='col-sm-2'></div>
				<div style='overflow-y: scroll;text-align:left; width: 100%;height: 500px;'>

				<label>Commenter Name</label>
				<br>
				<p>Comment Section Comment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment SectionComment Section</p>
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
<p class="hidden" id="cust_id"><?php if(isset($_GET['code'])){echo $_GET['code'];} ?></p>
<p class="hidden" id="my_id"><?php echo $_SESSION['idno'];?></p>

<script type="text/javascript" src="js/rating.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$Rate = 0;
		$idno = $("#my_id").text();
		$newidno = parseInt($idno);
		$custID = $("$cust_id").text();
		$newcustid = parseInt($custID);
		$ratetxt = $("#rate_text").text();

		if(parseInt($ratetxt) <= 3){
			$("#rate_text").css("color","red");
		}
		else{
			(parseInt($ratetxt) > 3){
			$("#rate_text").css("color","green");
		}

		$("#s1").click(function(){
			console.log($newidno);

			$Rate = 1;

			my_ajax;

			$("#rate_content").addClass('hidden');
			$("#done_rate").addClass('hidden');

		});
		$("#s2").click(function(){
			$Rate = 2;

			my_ajax;

			$("#rate_content").addClass('hidden');
			$("#done_rate").addClass('hidden');
		});
		$("#s3").click(function(){
			$Rate = 3;

			my_ajax;

			$("#rate_content").addClass('hidden');
			$("#done_rate").addClass('hidden');
		});
		$("#s4").click(function(){
			$Rate = 4;

			my_ajax;

			$("#rate_content").addClass('hidden');
			$("#done_rate").addClass('hidden');
		});
		$("#s5").click(function(){
			$Rate = 5;

			my_ajax;

			$("#rate_content").addClass('hidden');
			$("#done_rate").addClass('hidden');
		});


		function my_ajax(){

			$.ajax({
				url: "insert_rating.php",
				type: "POST",
				async: false,
				data: {
					"request":1,
					"id": $newidno,
					"rate": $Rate,
					"custid": $newcustid,
					
				},
				success: function(data){
					console.log(data);
				}
			});
		}
	});
</script>
</body>
</html>