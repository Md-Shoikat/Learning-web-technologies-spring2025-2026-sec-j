<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit();
}
?>

<form method="post">
Current Password: <input type="password" name="current"><br>
New Password: <input type="password" name="new"><br>

<input type="submit" name="change">
</form>

<?php
if(isset($_POST['change'])){
    if($_SESSION['current_user']['password'] == $_POST['current']){
        $_SESSION['current_user']['password'] = $_POST['new'];
        echo "Password changed!";
    } else {
        echo "Wrong current password!";
    }
}
?>