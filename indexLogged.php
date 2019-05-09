<?php
require 'header.php';

require 'config.php';

if ( !isset( $_SESSION['sID'] ) ) {
    header('location: index.php');
    exit;
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Homepage FIFA</title>
</head>

<body>

<main>

    <ul>
        <li><a class="active" href="indexLogged.php">Home</a></li>
        <li><a href="createTeam.php">team-aanmaken</a></li>
        <li><a href="teamOverview.php">overview</a></li>
        <li><a href="download.php">download</a></li>
        <li><a href="toernooi.php">toernooi</a></li>
        <li><a href="teamEdit.php">team aanpassen</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>

</main>

</body>
</html>

