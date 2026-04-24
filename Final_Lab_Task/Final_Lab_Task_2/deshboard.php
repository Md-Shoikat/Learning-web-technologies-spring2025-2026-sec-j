<?php
session_start();

if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['current_user']['name']; ?></h2>

<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="view_profile.php">View Profile</a></li>
<li><a href="edit_profile.php">Edit Profile</a></li>
<li><a href="change_password.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>