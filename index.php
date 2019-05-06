<!doctype html>
<html lang="en">
<head>

    <title>Homepage FIFA</title>
</head>
<style>

    body {
        color: black;
 
        background-image: url("./img/FIFA-19-Logo21-1-768x402.jpg");
        background-size: cover;
        background-repeat: no-repeat;
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
       
        color: white;
    }
    .input_container{
        margin-left: 700px;
    }
</style>

<body>
    <body>
<main>
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




    <div class="login_container">
      <center>  <p>Login</p><p>Register</p></center>
    </div>
    <div class="input_container">
        <input type="text" placeholder="Search"><button>Zoeken</button>
    </div>

 
</main>

<footer>

</footer>
</body>
</html>