<?php
session_start();
if(isset($_SESSION['username'])===false){
  header("location: index.php");
  exit();
  die();
}
else{
require("../required/connectdb.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Talha's Web</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>



<div  style="text-align: left;">
  <h2>Welcome Admin: <?php echo $_SESSION['username']; ?></h2>
  <br>
  <ul class="adminlist">
      <li><a href="addpage.php">Add Page</a></li>
      <li><a href="view.php">View Page</a></li>
      <form action="logout.php" method="post">
      <button type="submit" class="btn btn-success btn-lg" 
      style="display:block; position: absolute; margin-left: 20%; margin-top: 1%;" name="logout">Logout</button>
    </form>
  </ul>
<br><br><br>

<div id="pages">

      <form action="addprocess.php" method="post" enctype="multipart/form-data">
            Enter Name:<input type="text" class="designInput inputSpecial" name="pname" placeholder="Enter product name" required><br><br>
            Enter Price:<input type="text" class="designInput inputSpecial" name="pprice" placeholder="Enter product price"><br><br>
            Enter Code:<input type="text" class="designInput inputSpecial" name="pCode" placeholder="Enter product code"><br><br>
            Discount:<input type="text" class="designInput inputSpecial" name="pdiscount" placeholder="Enter product Discount"><br><br>
            Enter Detail:<input type="text" class="designInput inputSpecial" name="pdetail" placeholder="Enter product Detail"><br><br>
            Enter Size:<input type="text" class="designInput inputSpecial" name="psize" placeholder="Enter product Size"><br><br>
            Stock:<input type="text" class="designInput inputSpecial" name="pstock" placeholder="Enter product Stock"><br><br>

            Image:<input type="file" name="pimage" ><br><br>

            <input type="submit" class="btn btn-success" name="submit">
      </form>
</div>

 
</div><!--end of dashboard-->










<?php

include("../include/footer.php");
}
?>