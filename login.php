<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:51
 */
    require "header.php"
?>

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





