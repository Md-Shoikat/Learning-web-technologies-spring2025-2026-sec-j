<!DOCTYPE html>
<html>
<body>

<form method="post">
    Date of Birth: <input type="date" name="dob">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST["dob"];
    echo "Your Date of Birth is: " . $dob;
}
?>

</body>
</html>