<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:51
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen</title>
</head>
<style>
    body {
        text-align: center;
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
    }
</style>
<body>
<h1>Inloggen</h1>

<form action="accountController.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label for="userName">Username</label>
        <input type="text" name="userName" id="userName">
    </div>

    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="userPassword" id="userPassword">
    </div>

    <input type="submit" value="Login">
    <p>Heb je nog geen account?<a href="register.php">Klik hier</a> om je te registreren</p>
</form>
</body>
</html>

