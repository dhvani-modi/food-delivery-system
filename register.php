<?php

include("db.php");

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,
    "SELECT * FROM users WHERE username='$username'");

    if(mysqli_num_rows($check) > 0)
    {
        echo "<script>alert('Username Already Exists');</script>";
    }
    else
    {
        mysqli_query($conn,
        "INSERT INTO users(username,password)
         VALUES('$username','$password')");

        echo "<script>
        alert('Registration Successful');
        window.location='index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-box">

<h1>Create Account</h1>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit" name="register">
Register
</button>

</form>

</div>

</body>
</html>