<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 12:00
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Wijzigen</title>
</head>

<style>
    body {
        text-align: center;
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      font-size: 28px;
  font-family: 'klarna',sans-serif;
    }
    *{

  margin: 0px;
  padding: 0px;
}


h1 {

     background-color: #4CAF50;
     color: #FFFFFF;
     margin: 2;

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

.active {
  background-color: #4CAF50;
}
</style>


    <body>

<div class="header">
  <center><h1>Fifa</h1><center>
</div>

<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a href="createTeam.php">team-aanmaken</a></li>
  <li><a href="teamOverview.php">overview</a></li>
  <li><a href="download.php">download</a></li>
  <li><a href="toernooi.php">toernooi</a></li>
  <li><a class="active"href="teamEdit.php">team aanpassen</a></li>
  <li><a href="login.php">login</a></li>
  <li><a href="register.php">registreren</a></li>
</ul>
<form action="accountController.php" method="post">
    <input type="hidden" name="type" value="createTeam">

    <div class="form-group">
        <label for="teamName">Teamnaam</label>
        <input type="text" name="teamName" id="teamName">
    </div>

    <div class="form-group">
        <label for="playerValue">Aantal spelers</label>
        <input type="number" name="playerValue" id="playerValue">

    </div>
    <input type="submit" value="Wijzigen">
</form>
</body>
</html>
