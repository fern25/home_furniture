<?php

session_start();

if(!isset($_SESSION['user'])){
    header("location:LoginAdmin.php?msg=blocklogin!");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Items Panel</title>
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
                <li>
                    <a href="AdminPanel.php">Add Item</a>
                </li>
                <li class="active">
                    <a href="UpdatePanel.php">Update Item</a>
                </li>
                <li>
                    <a href="">View Order Item</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        <div class="alert alert-warning" id="msg"><?php if(isset($_GET['msg'])){
          echo $_GET['msg']; 
      } ?></div>
      <div class="panel panel-default">
        <div class="panel-body" >
            <!-- some content -->
            <div class="col-sm-12">
                <div class="col-sm-4"><div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <h4>Search Product:</h4>

                        <input type="text" placeholder="Enter product name" name="search_name"> 
                        <button name="btn_search" class="btn btn-success">Search</button>

                    </form>
                    <br>
                    <div class="panel panel-danger hidden" id="panel">
                        <div class="panel-heading" id="heading">Failed to Retrieve data</div>
                        <!-- Either kani -->
                    </div>
                </div>
            </div>
            <div class="col-sm-4">  

             <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <h4>Update Products</h4>
                <label>Product Name:</label><br><br>
                <input style="width: 90%;" type="text" id="pname" name="pname" required=""><br><br>
                <label>Produdct Price:(PHP)</label><br><br>
                <input style="width: 90%;" type="number" required="" id="price" min="0" value="0" name="price"><br><br>
                <label>Product Description</label><br><br>
                <textarea name="desc" id="desc" style="width: 90%; height: 90%;"></textarea>
                <br><br>
                <button name="btn_update" class="btn btn-success">Update Item</button>
                <a href="index1.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
        <div class="col-sm-4">
            <!-- image ni dri dapita -->
            <?php  

            include "Connection.php";


            if(isset($_POST['btn_search'])){

                $product = $_POST['search_name'];

                $sql = "SELECT * FROM products where pname='$product'";

                $result= $con->query($sql);
                if($result->num_rows > 0){
                    echo "<script>
                    var panel = document.getElementById('panel');
                    var heading = document.getElementById('heading');

                    panel.classList.remove('panel-danger');
                    panel.classList.remove('hidden');
                    panel.classList.add('panel-success');

                    heading.innerHTML = 'Search Success';

                    </script>";
                    while ($row= $result->fetch_assoc()) {
                        $_SESSION['id'] = $row['id'];
                        echo "<img src='img/$row[img]' width='300'/>";

                        echo "<script>

                        var pname = document.getElementById('pname');
                        var price = document.getElementById('price');
                        var desc = document.getElementById('desc');

                        pname.value = '$row[pname]';
                        price.value = '$row[price]';
                        desc.innerHTML = '$row[description]';

                        </script>";
                    }
                }
                else{
                 echo "<script>
                 var panel = document.getElementById('panel');
                 var heading = document.getElementById('heading');

                 panel.classList.remove('panel-success');
                 panel.classList.remove('hidden');
                 panel.classList.add('panel-danger');

                 heading.innerHTML = 'Search not found in the database';

                 </script>";
             }
         }
         else if(isset($_POST['btn_update'])){

            $pname = $_POST['pname'];
            $pprice = $_POST['price'];
            $pdesc = $_POST['desc'];

            $sql = "UPDATE products set pname = '$pname', price='$pprice',description='$pdesc' where id='$_SESSION[id]'";

            if($con->query($sql)){
             echo "<script>
             var panel = document.getElementById('panel');
             var heading = document.getElementById('heading');

             panel.classList.remove('panel-danger');
             panel.classList.remove('hidden');
             panel.classList.add('panel-success');

             heading.innerHTML = 'Update successfully done';

             </script>";
         }
     }


     ?>
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
</div>
</body>
</html>