<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 9-5-2019
 * Time: 11:20
 */
require "config.php";
header('Content-Type: application/json');
$testsql = "SELECT * FROM teams";
$querytest = $db->query($testsql);
$testing = $querytest->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($testing);

$sql = "SELECT * FROM users";

$r = mysqli_query($con,$sql);
$result = array();

while($row = mysqli_fetch_array($r)) {
    array_push($result, array (
        'name'=>$row['name'],
        'email'=>$row['email']
    ));
}

if ( !isset( $_SESSION['sID'] ) ) {
    header('location: download.php');
    exit;
}