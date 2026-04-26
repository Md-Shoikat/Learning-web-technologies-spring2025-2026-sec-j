<?php
session_start();

if(!isset($_SESSION['status'])){
    header('location: login.php');
}

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = [];
}

$products = $_SESSION['products'];
?>

<h1>Product List</h1>

<a href="home.php">Back</a> |
<a href="add_product.php">Add Product</a> |
<a href="../controller/logout.php">Logout</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
</tr>

<?php foreach($products as $p){ ?>
<tr>
    <td><?=$p['id']?></td>
    <td><?=$p['name']?></td>
    <td><?=$p['price']?></td>
    <td>
        <a href="edit_product.php?id=<?=$p['id']?>">Edit</a> |
        <a href="../controller/deleteProduct.php?id=<?=$p['id']?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>