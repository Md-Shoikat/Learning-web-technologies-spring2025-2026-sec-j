
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood = $_POST["blood"];
    echo "Your Blood Group is: " . $blood;
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="O+">O+</option>
        <option value="AB+">AB+</option>
    </select>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>