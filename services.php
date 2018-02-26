<?php  

session_start();

if(!isset($_SESSION['cuser'])){
	header("location:index.php?msg=youcannotovveridefromaccount!");
}
else{
	//nothing to do with this code
}

?>
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
	
	body{
		background: url('bg/bg2.jpg');
		background-size: cover;
		font-family: "courier new";
	}
        .para{background-image: url(pictures/qZrszA.jpg);
        
        padding: 30px 10px 30px 10px}
        #head, #move{color: white; font-size: large; font-size: bold;}
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
					<li >
						<a href="account.php">Items</a>
					</li>
					<li class="active">
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
							<span class="badge badge-light">
								<?php  

								include "Connection.php";

								$sql = "SELECT sum(qty) as sumqty from clientitem where cid=$_SESSION[cid]";

								$result=$con->query($sql);
								if($result->num_rows > 0){
									while ($row =$result->fetch_assoc()) {
										echo $row['sumqty'];
									}
								}

								?>
							</span>
						</a>
					</li>
					<li>
						<a href=""><?php echo $_SESSION['cuser']; ?></a>
					</li>
					<li>
						<a href="logoutclient.php">Logout</a>
					</li>
				</ul> 	 
			</div>
		</div>
        
		<br><br>
        
        <center><p id="head">"DESIGN IS A JOURNEY OF DISCOVERY"</p></center>
        <br>
        <br>
        
        <div id="move">
         <center> <p>•Free Delivery &nbsp; •We Customize  &nbsp;   •Cash on Delivery  &nbsp;   •We make Beautiful Designs</p>
        </div>
        <br>
        <br>
<div class="para"> 
        
	<p>We have been designing and making various furniture based on different suggestions for years. No doubt, we know our products excellently. We will put your worries aside by transforming any furniture of your choice into a unique design. The Home Furniture Service Center mission is taking your favorite concept from a furniture and reshaping it into our services that is a complete realization of your ideas.</p>
    </div>