	<?php  

include "Connection.php";

if(isset($_POST['additem'])){
	$image = $_FILES['image']['name'];
	$path = "img/".basename($image);
	$desc = $_POST['desc'];
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$filetype = strtolower(pathinfo($path,PATHINFO_EXTENSION));

	if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg"){
		header("location:AdminPanel.php?msg=File must be in JPG and PNG JPEG format!");
	}
	else if(file_exists($path)){
		header("location:AdminPanel.php?msg=File already exist choose another file to upload!");
	}
	else{

		$sql1  = "SELECT * from products where pname ='$pname'";
		$result = $con->query($sql1);
		if($result->num_rows > 0){
			$sql = "UPDATE products set price = '$price', description='$desc', img='$image' where pname='$pname'";
		}
		else{
			$sql = "INSERT INTO products values(null,'$pname','$price','$desc','$image')";
		}

		if($con->query($sql)){
			if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
				header("location:AdminPanel.php?msg=Uploaded Successfully!");
			}
			else{
				header("location:AdminPanel.php?msg=Upload Failed!");
			}
		}
		else{
			echo "product insert failed!";
		}
	}

}


?>