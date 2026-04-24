<?php
session_start();
?>

<form method="post">
Enter Email: <input type="email" name="email"><br>
<input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit'])){
    foreach($_SESSION['users'] as $user){
        if($user['email'] == $_POST['email']){
            echo "Your password: ".$user['password'];
        }
    }
}
?>