<?php
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $price = $_POST['price'];

    if($name == "" || $price == ""){
        echo "Null input!";
    }else{

        $products = $_SESSION['products'] ?? [];

        $id = 1;
        if(!empty($products)){
            $last = end($products);
            $id = $last['id'] + 1;
        }

        $products[] = [
            'id' => $id,
            'name' => $name,
            'price' => $price
        ];

        $_SESSION['products'] = $products;

        header('location: ../view/product_list.php');
    }
}
?>