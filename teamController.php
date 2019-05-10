<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 08:55
 */

require 'config.php';
session_start();

if ($_POST ['type'] == 'createTeam') {
    $teamName = htmlentities(trim($_POST['teamName']));
    $teamPlayers = htmlentities(trim($_POST['playerValue']));
    $id = $_SESSION['sID'];

    $sqlCheckTeam = "SELECT * FROM teams WHERE teamName = :teamName";
    $teamVerify = $db->prepare($sqlCheckTeam);
    $teamVerify->bindParam(":teamName", $teamName);
    $teamVerify->execute([
        ':teamName' => $teamName
    ]);

    $teamExist = $teamVerify->rowCount();

    if ($teamExist) {
        $message = "Team name already exists, choose a different team name.";
        header("location: register.php?msg=$message");
        exit;
    } else {
        $sqlCreateTeam = "INSERT INTO teams (teamName, teamValue, teamUserId )
                              VALUES (:teamName, :teamPlayers, :ownerId)";

        $prepareTeamCreate = $db->prepare($sqlCreateTeam);
        $prepareTeamCreate->execute([
            ':teamName' => $teamName,
            ':teamPlayers' => $teamPlayers,
            ':ownerId' => $id
        ]);

        $message = "Team has been succesfully made!";
        header("location: teamOverview.php?msg=$message");
        exit;
    }
}

if ($_POST ['type'] == 'editTeam'){

}