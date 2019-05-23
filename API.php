<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-5-2019
 * Time: 11:20
 */
require "config.php";

$key = 'frikandelebakker';

if($_GET['key']) {
    header('Content-Type: application/json');
    $testsql = "SELECT * FROM teams";
    $querytest = $db->query($testsql);
    $testing = $querytest->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($testing);
} exit;