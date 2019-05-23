<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:48
 */
require 'header.php';
?>
    <main>
        <div class="container">
			<h2>Inloggen</h2>

			<form action="accountController.php" method="post">
			    <input type="hidden" name="type" value="login">
			    <div class="form-group">
			        <label for="userName">Gebruikersnaam</label>
			        <input type="text" name="userName" id="userName">
			    </div>

			    <div class="form-group">
			        <label for="userPassword">Wachtwoord</label>
			        <input type="password" name="userPassword" id="userPassword">
			    </div>

			    <input class="login btn" type="submit" value="Login">
				<p>Heb je nog geen account?<a href="register.php">Klik hier</a> om je te registreren!</p>

			</form>
        </div>
    </main>
<?php
require 'footer.php';
?>