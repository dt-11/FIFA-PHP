<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 17-5-2019
 * Time: 12:07
 */

require 'config.php';
if($_POST['type']== 'update') {
    $id = $_GET ['id'];
    $sql = "UPDATE users SET
            userTeam = :userTeam
        WHERE userId = :id
        ";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':userTeam' => $_POST['userTeam'],
        ':id' => $id
    ]);

    header("location: index.php");
    exit;
}



