<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit();
}
?>

<form method="post">
Name: <input type="text" name="name" value="<?php echo $_SESSION['current_user']['name']; ?>"><br>
Email: <input type="email" name="email" value="<?php echo $_SESSION['current_user']['email']; ?>"><br>

<input type="submit" name="update">
</form>

<?php
if(isset($_POST['update'])){
    $_SESSION['current_user']['name'] = $_POST['name'];
    $_SESSION['current_user']['email'] = $_POST['email'];

    echo "Updated!";
}
?>