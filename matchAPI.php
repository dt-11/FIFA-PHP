<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 23-5-2019
 * Time: 09:07
 */
require "config.php";

$key = 'frikandelebakker';

if($_GET['key']){
    header('Content-Type: application/json');
    $matchsql = 'SELECT matches.matchId, matches.matchCreated, tA.teamName AS teamA, tB.teamName as teamB
                  FROM matches
INNER JOIN teams tA
ON matches.teamAId = tA.teamid 
INNER JOIN teams tB
ON matches.teamBId = tB.teamId';
    $querymatch = $db->query($matchsql);
    $match = $querymatch->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($match);
} exit;