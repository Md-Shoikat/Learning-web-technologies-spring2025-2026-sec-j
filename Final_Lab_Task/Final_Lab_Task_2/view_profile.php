<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit();
}

$u = $_SESSION['current_user'];
?>

Name: <?php echo $u['name']; ?><br>
Email: <?php echo $u['email']; ?><br>
Gender: <?php echo $u['gender']; ?><br>
DOB: <?php echo $u['dob']; ?><br>