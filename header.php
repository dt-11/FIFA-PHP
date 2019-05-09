<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 6-5-2019
 * Time: 11:51
 */

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<header>
    <div class="header">
        <h1>Fifa</h1>
    </div>
    <?php
        //als je bent ingelogd als admin
        if(isset($_SESSION['adminID'])){
            echo"<ul>
                        <li><a href=\"indexLogged.php\">Home</a></li>
                        <li><a href=\"createTeam.php\">team-aanmaken</a></li>
                        <li><a href=\"teamOverview.php\">overview</a></li>
                        <li><a href=\"download.php\">download</a></li>
                        <li><a href=\"toernooi.php\">toernooi</a></li>
                        <li><a href=\"teamEdit.php\">team aanpassen</a></li>
                        <li><a href=>admin page</a></li>
                        <li><a href=\"logout.php\">logout</a></li>
                       </ul>";
        }
        //als je bent ingelogd
        else if(isset($_SESSION['sID'])){
                echo"<ul>
                        <li><a href=\"indexLogged.php\">Home</a></li>
                        <li><a href=\"createTeam.php\">team-aanmaken</a></li>
                        <li><a href=\"teamOverview.php\">overview</a></li>
                        <li><a href=\"download.php\">download</a></li>
                        <li><a href=\"toernooi.php\">toernooi</a></li>
                        <li><a href=\"teamEdit.php\">team aanpassen</a></li>
                        <li><a href=\"logout.php\">logout</a></li>
                       </ul>";
        }
        //als je uitgelogd of niet ingelogd bent
        else{
            echo "<ul>
                    <li><a href=\"index.php\">Home</a></li>
                    <li><a href=\"teamOverview.php\">overview</a></li>
                    <li><a href=\"toernooi.php\">toernooi</a></li>
                    <li><a href=\"login.php\">login</a></li>
                    <li><a href=\"register.php\">registreren</a></li>
                </ul>";
        }
    ?>
</header>

<style>
    *{
        margin: 0px;
        padding: 0px;
    }

    body {
        text-align: center;
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        font-size: 28px;
        font-family: 'klarna',sans-serif;
    }

    h1 {
        background-color: #4CAF50;
        color: #FFFFFF;
        margin: 0;

    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky; /* Safari */
        position: sticky;
        top: 0;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #111;
    }

    /*.active {*/
        /*background-color: #4CAF50;*/
    /*}*/

</style>


