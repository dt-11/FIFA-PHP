<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:50
 */
session_start();


$dbHost = "localhost";
$dbName = "fifa";
$dbUser = "root";
$dbPass = "";

$db = new PDO(
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPass
);

$db->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);