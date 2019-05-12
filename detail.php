<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 10-5-2019
 * Time: 12:08
 */
require 'config.php';
require 'header.php';

$id = $_SESSION['sID'];
$sql = "SELECT * FROM teams WHERE teamUserId = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$teamitem = $prepare->fetch(PDO::FETCH_ASSOC);

?>
<div class="header">
    <div class="container">
        <h1>Team: <?php
            echo htmlentities($teamitem['teamName'])
            ?></h1>
        <p>Hoeveelheid spelers: <?php
            echo htmlentities($teamitem['teamValue'])
            ?></p>
        <form action="createTeamController.php" method="post">
            <input type="hidden" name="type" value="delete">
            <input type="submit" value="Delete">
        </form>
        <p><a href="edit.php">Edit Team</a></p>
    </div>
</div>


