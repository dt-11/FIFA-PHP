<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 10:26
 */

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

<style>
    body {
        text-align: center;
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>
<h1>Team aanmaken</h1>

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
