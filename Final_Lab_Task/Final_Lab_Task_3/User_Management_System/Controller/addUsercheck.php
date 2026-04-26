<?php
session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];

    if($username == "" || $email == ""){
        echo "Null input!";
    }else{

        // existing users
        $users = $_SESSION['users'];

        // new id generate
        $newId = 1;
        if(!empty($users)){
            $lastUser = end($users);
            $newId = $lastUser['id'] + 1;
        }

        // new user create
        $newUser = [
            'id' => $newId,
            'username' => $username,
            'email' => $email
        ];

        // add user
        $users[] = $newUser;

        // update session
        $_SESSION['users'] = $users;

        // redirect
        header('location: ../view/user_list.php');
    }

}else{
    echo "Invalid request!";
}
?>