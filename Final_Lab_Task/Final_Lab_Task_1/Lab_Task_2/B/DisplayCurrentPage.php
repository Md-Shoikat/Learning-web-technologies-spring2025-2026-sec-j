<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    echo "Your Email is: " . $email;
}
?>






<!DOCTYPE html>
<html>
<body>

<form method="post">
    Email: <input type="email" name="email">
    <input type="submit" value="Submit">
</form>
</body>
</html>