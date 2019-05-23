<?php

require 'config.php';

session_start();

if ($_POST['type']== 'delete'){
    $id = $_SESSION['sID'];
    $sqlDelete = "DELETE FROM teams WHERE teamUserId = :id";
    $prepareDelete = $db->prepare($sqlDelete);
    $prepareDelete->execute([
        ':id' => $id
    ]);
    header('location: overview.php');
    exit;
}

if ($_POST['type']=='edit') {
    $id = $_SESSION['sID'];
    $sql = "UPDATE teams SET
            teamName = :teamname,
            teamValue = :teamvalue
        WHERE teamUserId = :id
        ";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':teamname' => $_POST['teamName'],
        ':teamvalue' => $_POST['teamValue'],
        ':id' => $id
    ]);
    header("location: overview.php");
    exit;
}

if ($_POST['type']=='createTeam') {
    $teamName = htmlentities(trim($_POST['teamName']));
    $teamPlayers = htmlentities(trim($_POST['playerValue']));
    $id = $_SESSION['sID'];

//$sqlId = "SELECT * FROM users WHERE userId = :id";
//$prepareId = $db->prepare($sqlId);
//$prepareId->execute([
//    ':id' => $id
//]);

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
        header("location: overview.php?msg=$message");
        exit;
    }
}