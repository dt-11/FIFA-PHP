<!doctype html>
<html lang="en">
<head>
    <title>Homepage FIFA</title>
</head>

<body>

<main>
    <div class="header">
        <h1>Fifa</h1>
    </div>

    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="createTeam.php">team-aanmaken</a></li>
        <li><a href="teamOverview.php">overview</a></li>
        <li><a href="download.php">download</a></li>
        <li><a href="toernooi.php">toernooi</a></li>
        <li><a href="teamEdit.php">team aanpassen</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="register.php">registreren</a></li>
    </ul>


    <div class="login_container">
        <h2>Home</h2>
    </div>


</main>

</body>
</html>

<style>

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

