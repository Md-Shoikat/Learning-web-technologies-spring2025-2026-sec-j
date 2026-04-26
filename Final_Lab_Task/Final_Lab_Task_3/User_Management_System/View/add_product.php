<?php
session_start();
if(!isset($_SESSION['status'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

<h1>Add Product</h1>

<a href="product_list.php">Back</a>

<form method="post" action="../controller/addProductCheck.php">
    Name: <input type="text" name="name"><br><br>
    Price: <input type="text" name="price"><br><br>
    <input type="submit" name="submit" value="Add">
</form>

</body>
</html>