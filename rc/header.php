<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 10:00
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
    <link rel="stylesheet" href="./css/style.css" class="css">
    <title>FIFA</title>
</head>

<body>
    <header>
        <div class="title">
            <h1>FIFA Voetbal Toernooi</h1>
        </div>
        <div class="navbar">
            <div class="container">
                <?php
                //als je bent ingelogd als admin
                if(isset($_SESSION['adminID'])){
                    echo"
                    <div>
                        <ul>
                            <li><a href=\"indexLogged.php\">Home</a></li>
                            <li><a href=\"createTeam.php\">Maak een team</a></li>
                            <li><a href=\"overview.php\">Overzicht</a></li>
                            <li><a href=\"download.php\">Download</a></li>
                            <li><a href=\"tournament.php\">Toernooi</a></li>
                            <li><a href=\"myTeams.php\">Mijn teams</a></li>
                        </ul> 
                    </div>   
                    <div>
                        <ul>
                            <li><a href=\"admin.php\">Admin CP</a></li>
                            <li><a href=\"logout.php\">Loguit</a></li>
                        </ul>
                    </div>   
                ";
                }
                //als je bent ingelogd
                else if(isset($_SESSION['sID'])){
                    echo"
                    <div>
                        <ul>
                            <li><a href=\"indexLogged.php\">Home</a></li>
                            <li><a href=\"createTeam.php\">Maak een team</a></li>
                            <li><a href=\"overview.php\">Overzicht</a></li>
                            <li><a href=\"download.php\">Download</a></li>
                            <li><a href=\"tournament.php\">Toernooi</a></li>
                            <li><a href=\"myTeams.php\">Mijn teams</a></li>
                        </ul> 
                    </div> 
                    <div>
                        <ul>
                            <li><a href=\"logout.php\">Loguit</a></li>
                        </ul>
                    </div> 
                ";
                }
                //als je uitgelogd of niet ingelogd bent
                else{
                    echo "
                    <div>
                        <ul>
                            <li><a href=\"index.php\">Home</a></li>
                            <li><a href=\"overview.php\">Overzicht</a></li>
                            <li><a href=\"tournament.php\">Toernooi</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a href=\"login.php\">Login</a></li>
                            <li><a href=\"register.php\">Registreren</a></li>
                        </ul>
                    </div>    
                ";
                }
                ?>
            </div>
        </div>
    </header>