<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 10:26
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
    <title>Team aanmaken</title>
</head>

<body>
<div class="header">
    <h1>Fifa</h1>
</div>

<ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="createTeam.php">team-aanmaken</a></li>
    <li><a href="teamOverview.php">overview</a></li>
    <li><a href="download.php">download</a></li>
    <li><a href="toernooi.php">toernooi</a></li>
    <li><a href="teamEdit.php">team aanpassen</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="register.php">registreren</a></li>
</ul>

<h2>Team aanmaken</h2>

<form action="accountController.php" method="post">
    <input type="hidden" name="type" value="createTeam">

    <div class="form-group">
        <label for="teamName">Teamnaam</label>
        <input type="text" name="teamName" id="teamName">
    </div>

    <div class="form-group">
        <label for="playerValue">Aantal spelers</label>
        <input type="number" name="playerValue" id="playerValue">
    </div>

    <input type="submit" value="Aanmaken">
</form>

</body>
</html>




