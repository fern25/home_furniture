<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location:LoginAdmin.php?msg=blocklogin!");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="adminpanel.css"> -->
</head>
<body style="background: url('bg.png');background-repeat: no-repeat;background-size: cover;">
    <div class="container">
        <div class="col-sm-12"></div>
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Admin Panel</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="">Add Item</a>
                </li>
                <li>
                    <a href="">Update Item</a>
                </li>
                <li>
                    <a href="">View Order Item</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <div class="panel panel-warning">
            <div class="panel-body" >
                <!-- some content -->
                <div class="col-sm-12">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">  
                        <h4>Add Products to the database</h4>
                        <label>Product Name:</label><br><br>
                        <input style="width: 90%;" type="text" name="pname" required=""><br><br>
                        <label>Produdct Price:(PHP)</label><br><br>
                        <input style="width: 90%;" type="number" required="" min="1" value="1" name="price"><br><br>
                        <label>Product Description</label><br><br>
                        <textarea name="desc" style="width: 90%; height: 90%;"></textarea>
                        <br><br>
                        <button name="Addbtn" class="btn btn-success">Add Item</button>
                        <a href="home.php" class="btn btn-danger">Cancel</a>
                    </div>
                    <div class="col-sm-4">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                           <input name="image" type='file' onchange="readURL(this);" />
                           <img id="blah" src="#" alt="-------------------------------------" />
                           <br>
                       </form>
                   </div>
               </div>
           </div>
           <div class="panel-footer">
            <center>© 2017 Home Furniture Website All Rights Reserved | Design by King doh</center>
        </div>
    </div>
</div>
<script type="text/javascript">
 function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
            .attr('src', e.target.result)
            .width(150)
            .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</body>
</html>