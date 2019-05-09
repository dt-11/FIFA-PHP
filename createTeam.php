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





