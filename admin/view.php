
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














<div  style="text-align: center;">
  <h2>Welcome : <?php echo $_SESSION['username']; ?></h2>
  <br>
  <ul class="adminlist">
  	<li><a href="addpage.php">Add Page</a></li>
  	<li><a href="view.php">View Page</a></li>
  	<form action="logout.php" method="post">
      <button type="submit" class="btn btn-success btn-lg" 
      style="display:block; position: absolute; margin-left: 20%; margin-top: 1%;" name="logout">Logout</button>
    </form>
  </ul>
<br><br>

<div id="Viewpages">
  <table class="table table-bordered table-striped table-dark">
    <tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Code</th>
      <th>Product In Stock</th>
      <th>Product Discount</th>
      <th>Product Size</th>
      <th>Product Detail</th>
      <th>Product Image</th>
      <th>Delete Record</th>
      <th>Edit Record</th>
    </tr>
<?php
require("../required/connectdb.php");

$query = "SELECT * FROM tblporducts";
$result = mysqli_query($connect,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productId'];
    $name = $row['productName'];
    $price = $row['productPrice'];
    $code = $row['productCode'];
    $stock = $row['productInStock'];
    $discount = $row['productDiscount'];
    $size = $row['productSizes'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
?>

<tr>
  <td><?php echo $id; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $price; ?></td>
  <td><?php echo $code; ?></td>
  <td><?php echo $stock; ?></td>
  <td><?php echo $discount; ?></td>
  <td><?php echo $size; ?></td>
  <td><?php echo $detail; ?></td>
  <td><img src="../assets/upload/<?php echo $image; ?>" alt="image here" width="60px" height="60px" ></td>
  <td><a href="delete.php?Deleteid=<?php echo $id; ?>">Delete</a></td>
  <td><a href="update.php?Updateid=<?php echo $id; ?>">Update</a></td>
</tr>












<?php }} ?>





  </table>
</div><!--end of viewpage-->

 
</div><!--end of dashboard-->









<?php

include("../include/footer.php");

}
?>