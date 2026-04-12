<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_REQUEST['submit']))
{  
    $blood = $_POST['blood'];
}
?>

<form method="post">
    Blood Group:
    <select name="blood">
        <option value="">Select</option>

        <option value="A+" <?php if(isset($blood) && $blood=="A+"){echo "selected";} ?>>A+</option>
        
        <option value="B+" <?php if(isset($blood) && $blood=="B+"){echo "selected";} ?>>B+</option>
        
        <option value="O+" <?php if(isset($blood) && $blood=="O+"){echo "selected";} ?>>O+</option>
        
        <option value="AB+" <?php if(isset($blood) && $blood=="AB+"){echo "selected";} ?>>AB+</option>
        
    </select>
    <br>
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>