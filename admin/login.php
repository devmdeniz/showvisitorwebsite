<?php include("../system/connection.php")?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/adminlogin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <h2>Login In/h2>
        <form method="post" action = "../system/logindeterminator.php">
            <input name="username" placeholder = "username">
            <span id = "email">Username</span>
            <input name="password" type = "password" placeholder = "Password">
            <span id = "password">Password</span>
            <input type = "submit" value = "Login">
        </form>
    </body>
</html>