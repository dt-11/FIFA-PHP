<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:51
 */
    require "header.php"
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

<header>
    <div class="header">
        <h1>Fifa</h1>
    </div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="createTeam.php">team-aanmaken</a></li>
        <li><a href="teamOverview.php">overview</a></li>
        <li><a href="download.php">download</a></li>
        <li><a href="toernooi.php">toernooi</a></li>
        <li><a href="teamEdit.php">team aanpassen</a></li>
        <li><a class="active" href="login.php">login</a></li>
        <li><a href="register.php">registreren</a></li>
    </ul>

</header>

<body>

<h2>Inloggen</h2>

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
    <p> <p>Heb je nog geen account?<a href="register.php">Klik hier</a> om je te registreren</p>

    </form>
</body>
</html>




