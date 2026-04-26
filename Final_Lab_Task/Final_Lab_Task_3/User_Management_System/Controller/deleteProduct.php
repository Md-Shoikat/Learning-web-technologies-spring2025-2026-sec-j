<?php
session_start();

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $products = $_SESSION['products'] ?? [];

    $new = [];

    foreach($products as $p){
        if($p['id'] != $id){
            $new[] = $p;
        }
    }

    $_SESSION['products'] = $new;

    header('location: ../view/product_list.php');

}else{
    echo "Invalid request!";
}
?>