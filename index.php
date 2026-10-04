<?php

session_start();
include("db.php");

if(isset($_POST['login']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $q = mysqli_query($conn,
    "SELECT * FROM users
     WHERE username='$user'
     AND password='$pass'");

    if(mysqli_num_rows($q) > 0)
    {
        $_SESSION['user'] = $user;
        header("Location: home.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Login');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>FoodieHub Login</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-box">

<h1>🍔 FoodieHub</h1>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit" name="login">
Login
</button>

</form>

<br>

<a href="register.php">
Create New Account
</a>

</div>

</body>
</html>