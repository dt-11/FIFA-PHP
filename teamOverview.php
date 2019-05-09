<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 11:25
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
    <li><a href="createTeam.php">team-aanmaken</a></li>
    <li><a class="active" href="teamOverview.php">overview</a></li>
    <li><a href="download.php">download</a></li>
    <li><a href="toernooi.php">toernooi</a></li>
    <li><a href="teamEdit.php">team aanpassen</a></li>
    S
</ul>

<h2>Team Overzicht</h2>
    <div class="overzicht">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

</body>




