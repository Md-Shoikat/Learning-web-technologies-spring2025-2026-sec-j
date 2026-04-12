<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_REQUEST['submit']))
{  
    $gender = $_POST['gender'];
}
?>

<form method="post">
    Gender:
    
    <input type="radio" name="gender" value="Male"
    <?php if(isset($gender) && $gender=="Male"){echo "checked";} ?>> Male
    
    <input type="radio" name="gender" value="Female"
    <?php if(isset($gender) && $gender=="Female"){echo "checked";} ?>> Female
    
    <input type="radio" name="gender" value="Other"
    <?php if(isset($gender) && $gender=="Other"){echo "checked";} ?>> Other
    
    <br>
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>