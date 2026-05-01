<?php

// Database Connection
$conn = mysqli_connect("127.0.0.1", "root", "", "test1    ");

if(!$conn){
    die("Connection Failed");
}

// LOGIN CODE
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // ❌ Vulnerable SQL Query (SQL Injection Possible)
    $sql = "SELECT * FROM user 
            WHERE username='$username' 
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    // Check Login
    if(mysqli_num_rows($result) > 0){
        echo "<h3 style='color:green;'>Login Successful</h3>";
    }
    else{
        echo "<h3 style='color:red;'>Invalid Username or Password</h3>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Vulnerable Login</title>
</head>
<body>

<h2>Login Page</h2>

<form method="POST">

    Username:<br>
    <input type="text" name="username" required>
    <br><br>

    Password:<br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="login">Login</button>

</form>

</body>
</html>
