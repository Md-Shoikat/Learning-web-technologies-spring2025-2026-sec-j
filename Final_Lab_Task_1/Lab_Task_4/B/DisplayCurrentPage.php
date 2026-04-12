


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
    echo "Your Gender is: " . $gender;
}
?>




<!DOCTYPE html>
<html>
<body>

<form method="post">
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br>
    <input type="submit" value="Submit">
</form>


</body>
</html>