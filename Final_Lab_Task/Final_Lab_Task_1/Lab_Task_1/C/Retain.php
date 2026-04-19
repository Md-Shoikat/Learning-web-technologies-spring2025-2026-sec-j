<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_REQUEST['submit']))
{  
    $name = $_POST['name'];
}
?>

<form method="post">
    name: <input type="text" name="name" 
    value="<?php if(isset($name)){echo $name;} ?>"/>
    
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>