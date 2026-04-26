<?php
session_start();

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $users = $_SESSION['users'];


    $updatedUsers = [];

    foreach($users as $user){
        if($user['id'] != $id){
            $updatedUsers[] = $user;
        }
    }

    $_SESSION['users'] = $updatedUsers;

    header('location: ../view/user_list.php');

}else{
    echo "Invalid request!";
}
?>