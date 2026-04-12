<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_REQUEST['submit']))
{  
    $email = $_POST['email'];
}
?>

<form method="post">
    email: <input type="text" name="email" 
    value="<?php if(isset($email)){echo $email;} ?>"/>
    
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>