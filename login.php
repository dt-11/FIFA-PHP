<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 15-4-2019
 * Time: 10:51
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen</title>
</head>
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
        padding: 0;
      font-size: 28px;
  font-family: 'klarna',sans-serif;
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
<header>
    <div class="header">
  <center><h1>Fifa</h1><center>
</div>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="createTeam.php">team-aanmaken</a></li>
  <li><a href="#overview">overview</a></li>
  <li><a href="download.php">download</a></li>
  <li><a href="#toernooi">toernooi</a></li>
  <li><a href="#team-aanpassen">team aanpassen</a></li>
  <li><a class="active"href="login.php">login</a></li>
  <li><a href="register.php">registreren</a></li>
</ul>
<h3>


</header>
<body>
<h2>Inloggen</h2>

<form action="accountController.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label for="userName">Username</label>
        <input type="text" name="userName" id="userName">
    </div>

    <div class="form-group">
        <label for="userPassword">Password</label>
        <input type="password" name="userPassword" id="userPassword">
    </div>

    <input type="submit" value="Login">
   <h10> <p>Heb je nog geen account?<a href="register.php">Klik hier</a> om je te registreren</p></h10>

<br>
<br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
        fifa© 
        <br>
       



</footer>

</form>
</body>
</html>

