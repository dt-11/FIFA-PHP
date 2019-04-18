<!doctype html>
<html lang="en">
<head>

    <title>Homepage FIFA</title>
</head>
<style>

    body {
        margin-left: 100px;
        margin-right: 100px;
        color: black;
 
        background: #90EE90;
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

    main {
        background-image: url("./img/fifa-ea-games.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
    }
    .container_header {
        display: flex;
        justify-content: center;
    }

    .container_header h1 {
        margin: 20px;
    }

    .login_container {
        display: flex;
        justify-content: center;
        border: solid 1px;
        padding: 0;
    }

    .login_container p {
        margin-right: 20px;
        border: solid 1px;
        padding: 20px
    }

    .input_container {
        float: right;
    }

    .competitie_container {
        text-align: center;
    }

    .team_container {
        text-align: center;
        margin-top: 20px;
    }

    .team_container div {
        margin: 10px;
        border: solid 1px;
    }

    .slot_container {
        display: flex;
        justify-content: center;
    }

    .slot_container img {
        width: 20%;
        height: 20%;
        margin-left: 20px;
    }
</style>

<body>
    <body>

<div class="header">
  <center><h1>Fifa</h1><center>
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



<main>
    <div class="login_container">
        <p>Login</p><p>Register</p>
    </div>
    <div class="input_container">
        <input type="text" placeholder="Search"><button>Zoeken</button>
    </div>

    <div class="competitie_container">
        <h2>Competities</h2>
            <div class="poule">1</div>
            <div class="poule">2</div>
            <div class="poule">3</div>
            <div class="poule">4</div>
            <div class="poule">5</div>
    </div>

    <div class="team_container">
        <div class="team">team 1</div>
        <div class="team">team 2</div>
        <div class="team">team 3</div>
        <div class="team">team 4</div>
        <div class="team">team 5</div>
        <div class="team">team 6</div>
    </div>
    
    <div class="slot_container">
        <p>Wij zijn beoordeeld met 5 sterren</p>
        <img src="img/beoordeling-vijf-sterren.jpg" alt="">
    </div>
</main>

<footer>

</footer>
</body>
</html>