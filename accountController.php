<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:52
 */

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: register.php');
    exit;
}

require 'config.php';

if ($_POST ['type'] == 'register'){
    $userName     = htmlentities(trim($_POST['userName']));
    $userPassword = htmlentities(trim($_POST['userPassword']));
    $userEmail    = htmlentities(trim($_POST['userEmail']));

    //controlleren of de email al bestaat.
    $sqlCheckEmail = "SELECT * FROM users WHERE userEmail = :userEmail";
    $emailVerify = $db->prepare($sqlCheckEmail);
    $emailVerify->bindParam(":userEmail", $userEmail);
    $emailVerify->execute([
        ':userEmail' => $userEmail
    ]);

    $emailExist = $emailVerify->rowCount();

    if ($emailExist) {
        $message = "Email already exists, choose a different email.";
        header("location: register.php?msg=$message");
        exit;
    }
    else{
        $userPassword = password_hash($userPassword, PASSWORD_DEFAULT);
        //account is volgens de voorwaarden en word aangemaakt.
        $sqlCreateAccount = "INSERT INTO users (userName, userPassword, userEmail)
                              VALUES (:userName, :userPassword, :userEmail)";

        $prepareRegister = $db->prepare($sqlCreateAccount);
        $prepareRegister->execute([
            ':userName'     => $userName,
            ':userPassword' => $userPassword,
            ':userEmail'    => $userEmail
        ]);

        $message = "Account has been succesfully made!";
        header("location: login.php?msg=$message");
    }
    exit;
}

if ($_POST ['type'] == 'login'){
    $userName     = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    $connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    $sqlLogin = "SELECT * FROM users WHERE userName = '".$userName."' ";

    $query = mysqli_query($connect, $sqlLogin);

    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_array($query);
        $userPasswordUnhash = $row['userPassword'];

        if(password_verify($userPassword, $userPasswordUnhash)){
            $message = "Welcome $userName !";
            session_start();
            $_SESSION['sID'] = $row['userId'];
            //is de gebruiker een admin? 1=ja - 0=nee
            if($row['isAdmin'] == 1){
                $_SESSION['adminID'] = true;
                header("location: indexLogged.php?msg=$message");
                exit;
            }
            else{
                header("location: indexLogged.php?msg=$message");
                exit;
            }

        }
        else{
            $message = "Password or username does not match";
            header("location: login.php?msg=$message");
            exit;
        }
    }
}

