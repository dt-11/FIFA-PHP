<?php
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

<h1>Edit Manga</h1>
<form action="createTeamController.php" method="post">
    <input type="hidden" name="type" value="edit">
    <div class="from-class">
        <label for="teamName">Team naam</label>
        <input type="text" name="teamName" id="teamName" value="<?=htmlentities($teamitem['teamName'])?>">
    </div>
    <div class="from-class">
        <label for="teamValue">Team aantal spelers</label>
        <input type="text" name="teamValue" id="teamValue" value="<?=htmlentities($teamitem['teamValue'])?>">
    </div>

    <input type="submit" value="Edit">


