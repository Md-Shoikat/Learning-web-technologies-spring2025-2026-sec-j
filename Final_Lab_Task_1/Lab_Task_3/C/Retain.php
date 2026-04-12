<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_REQUEST['submit']))
{  
    $dob = $_POST['dob'];
}
?>

<form method="post">
    Date of Birth: 
    <input type="date" name="dob" 
    value="<?php if(isset($dob)){echo $dob;} ?>"/>
    
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>