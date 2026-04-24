<?php
session_start();

if(isset($_POST['submit'])){

    if($_POST['password'] != $_POST['confirm']){
        echo "Password not matched!";
    }
    else{
        $_SESSION['user'] = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "gender" => $_POST['gender'],
            "dob" => $_POST['dob']
        ];

        echo "Registration successful!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
</head>
    <body>
        <form method="post">
            Name: <input type="text" name="name"><br>
            Email: <input type="email" name="email"><br>
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            Confirm Password: <input type="password" name="confirm"><br>

            Gender:
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other<br>

            DOB: <input type="date" name="dob"><br>

            <input type="submit" name="submit">
        </form>
    
</body>
</html>

