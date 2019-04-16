<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage FIFA</title>
</head>
<style>

    body {
        margin-left: 100px;
        margin-right: 100px;
        color: black;
        font-family: 'karla', sans-serif;
        background: #90EE90;
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

<header>
    <div class="container_header">
        <h1>Home</h1>
        <h1>Poules</h1>
    </div>
</header>

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