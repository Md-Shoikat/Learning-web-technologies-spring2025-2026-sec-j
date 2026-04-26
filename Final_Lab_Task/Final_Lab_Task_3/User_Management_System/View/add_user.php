<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add User</title>
</head>
<body>

    <h1>Add New User</h1>
    <a href="user_list.php">Back</a>
    <br><br>

    <form method="post" action="../controller/addUserCheck.php">
        Username: <input type="text" name="username"> <br>
        Email: <input type="email" name="email"> <br>
        <input type="submit" name="submit" value="Add User">
    </form>

</body>
</html>