<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<div style="width: 200px;height: 400px;" class="panel panel-default">
			<div style="overflow: auto;width: 200px;height: 400px;" class="panel-heading">	

				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				<div class="panel panel-info">
					This is a name:
					<div class="panel-heading">
						This is a comment
					</div>
				</div>
				
			</div>
		</div>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<input type="password" name="password">
			<button name="btn_convert">CONVERT TO MD5</button>



		</form>
	</div>
	<?php  

	if(isset($_POST['btn_convert'])){


		$databasepassword = "jamestubiano";

		$md5dbpass = md5($databasepassword);


		$pass = $_POST['password'];
		$newpass = md5($pass);


		echo $md5dbpass.'<br>';
		echo $newpass;

	}

	?>
</body>
</html>