<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13-5-2019
 * Time: 10:16
 */

require 'config.php';

session_start();

$sqlCheckTable = "SELECT * FROM `matches`";
$queryCheckTable = $db->query($sqlCheckTable);
$checkTable = $queryCheckTable->fetchAll(PDO::FETCH_ASSOC);

if ($checkTable[0]['matchCreated'] == 1){
    header("location: admin.php");
    exit;
}
else{
    $sql = "SELECT * FROM `teams`";

    $query = $db->query($sql);

    $teams = $query->fetchAll(PDO::FETCH_ASSOC);

    $amountOfTeams = count($teams);

//$amountOfMatches = ($amountOfTeams * ($amountOfTeams - 1)) / 2;


    foreach ($teams as $team){
        $teams = array_slice($teams, 1, $amountOfTeams);

        foreach ($teams as $oppositeTeam){
            $teamA = $team['teamName'];
            $teamB = $oppositeTeam['teamName'];

            $sqlCreateMatch = "INSERT INTO matches (teamAId, teamBId, matchCreated)
                            VALUES (:teamAId, :teamBId, 1)";
            $prepareCreateMatch = $db->prepare($sqlCreateMatch);
            $prepareCreateMatch->execute([
                ":teamAId" => $team['teamId'],
                ":teamBId" => $oppositeTeam['teamId']
            ]);
        }
    }
    header("location: tournament.php");
    exit;
}






