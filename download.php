<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 10:44
 */
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Downloaden</title>
</head>
<style>
    body {
        text-align: center;
        margin: auto;
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      font-size: 28px;
  font-family: 'klarna',sans-serif;
}

    }

    img {
        height: 20%;
        width: 20%;
    }

    .download {
        float: center;
    }

    button {
        padding: 30px;
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
  <li><a href="index.php">Home</a></li>
  <li><a href="createTeam.php">team-aanmaken</a></li>
  <li><a href="teamOverview.php">overview</a></li>
  <li><a class="active"href="download.php">download</a></li>
  <li><a href="toernooi.php">toernooi</a></li>
  <li><a href="teamEdit.php">team aanpassen</a></li>
  <li><a href="login.php">login</a></li>
  <li><a href="register.php">registreren</a></li>
</ul>
<h3>
    <div class="download">
        <div class="tekst">
            <h2>Downloaden</h2>
        </div>
        <div class="img">
            <img src="img/visualstudio.png" alt="">
        </div>
        <div class="button">
            <button>Klik hier om te downloaden</button>
        </div>

    </div>

</body>
</html>
