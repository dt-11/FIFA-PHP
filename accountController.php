<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:52
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: ');
    exit;
}

require 'config.php';

if ($_POST ['type'] == 'register'){
    $userName     = trim($_POST['userName']);
    $userPassword = trim($_POST['userPassword']);
    $userEmail    = trim($_POST['userEmail']);

    var_dump($userName, $userPassword, $userEmail);
}

if ($_POST ['type'] == 'login'){
    $userName     = trim($_POST['userName']);
    $userPassword = trim($_POST['userPassword']);

    var_dump($userName, $userPassword);
}