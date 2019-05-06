<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 11:12
 */
    require "header.php"
?>

<body>

<ul>
    <li><a  href="index.php">Home</a></li>
    <li><a href="createTeam.php">team-aanmaken</a></li>
    <li><a href="teamOverview.php">overview</a></li>
    <li><a href="download.php">download</a></li>
    <li><a class="active" href="toernooi.php">toernooi</a></li>
    <li><a href="teamEdit.php">team aanpassen</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="register.php">registreren</a></li>
</ul>

<h2>Toernooi</h2>

<div class="toernooi">
    <p></p>
</div>

</body>

<style>
    .toernooi p{
        border: solid 1px;
        padding: 100px;
    }
</style>

