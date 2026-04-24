<?php
session_start();

if(!isset($_SESSION['users'])){
    $_SESSION['users'] = [];
}
?>

<form method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>

Remember Me <input type="checkbox" name="remember"><br>

<input type="submit" name="login">
</form>

<?php
if(isset($_POST['login'])){
    foreach($_SESSION['users'] as $user){
        if($user['username'] == $_POST['username'] && $user['password'] == $_POST['password']){

            $_SESSION['logged_in'] = true;
            $_SESSION['current_user'] = $user;

            if(isset($_POST['remember'])){
                setcookie("username", $_POST['username'], time()+3600);
            }

            header("Location: dashboard.php");
            exit();
        }
    }
    echo "Invalid login!";
}
?>