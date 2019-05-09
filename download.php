<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 10:44
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
        <li><a href="teamOverview.php">overview</a></li>
        <li><a class="active" href="download.php">download</a></li>
        <li><a href="toernooi.php">toernooi</a></li>
        <li><a href="teamEdit.php">team aanpassen</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>

    <div class="download">
        <div class="tekst">
            <h2>Downloaden</h2>
        </div>
        <div class="img">
            <img src="img/visualstudio.png" alt="">
        </div>
        <div class="button">
            <button>Klik hier om te downloaden</button>
        </div>
    </div>
</body>


<style>

    img {
        height: 20%;
        width: 20%;
    }

    .download {
        float: center;
    }

    button {
        padding: 30px;
    }
</style>

