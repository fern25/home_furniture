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
        .para{background-color: white;
        
        padding: 30px 10px 30px 10px}
        .bgk{background-image: url(pictures/qZrszA.jpg)}
      
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
					<li>
						<a href="account.php">Items</a>
					</li>
					<li >
						<a href="services.php">Services</a>
					</li>
					<li class="active">
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
                <div class="bgk"><span style="font-family:Centaury Gothic; font-color: #2d668b ">
                <div class="bx1"><center><img src="pictures/profileicon.png" width="50"></center>
                 <center><p><b>Home Furniture</b> </p></center>
                 <center>
                     <br><br>
                     
                       <div class="bx2"><center><img src="pictures/phoneicon.png" width="50"></center>
                <center><p><b>09950212370</b></p></center>
             <br><br>
                             <div class="bx3"><center><i class="fab fa-facebook-square"></i></center>
                 <center><p><b>homefurniture@yahoo.com</b></p></center>
                                 
        <br><br>
                                    <div class="bx3"><center><img src="pictures/google-location-icon-16.png"   width="50"></center>
        
                        <center><p><b>Emily Homes, Cabantian Blk.3 Lot 4 Davao City</b></p></center>
                        
                