<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    echo "Your username is {$username} and password is {$password}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>