<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 10:26
 */
require "header.php";

require 'config.php';

if ( !isset( $_SESSION['sID'] ) ) {
    header('location: index.php');
    exit;
}
?>
<body>

<ul>
    <li><a href="indexLogged.php">Home</a></li>
    <li><a class="active" href="createTeam.php">team-aanmaken</a></li>
    <li><a href="teamOverview.php">overview</a></li>
    <li><a href="download.php">download</a></li>
    <li><a href="toernooi.php">toernooi</a></li>
    <li><a href="teamEdit.php">team aanpassen</a></li>
    <li><a href="logout.php">logout</a></li>
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





