<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"];
        echo "Your Name is: " . $name;
    }
?>






<!DOCTYPE html>
<html>
<body>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>


</body>
</html>