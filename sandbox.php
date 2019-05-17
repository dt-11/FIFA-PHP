<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13-5-2019
 * Time: 10:16
 */

require 'config.php';

$sqlGetTeams = "SELECT * FROM teams";

$query = $db->query($sqlGetTeams);

$teamsFetch = $query->fetchAll(PDO::FETCH_ASSOC);



//$randomizer = rand();

$amountOfTeams = count($teamsFetch);

$amountOfMatches[] = ($amountOfTeams * ($amountOfTeams - 1)) / 2;

echo '<pre>';
var_dump($amountOfMatches);
echo '</pre>';