<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:50
 */
require 'header.php';
?>
    <main>
        <div class="container">
			<h2>Registreren</h2>

			<form action="accountController.php" method="post">
			    <input type="hidden" name="type" value="register">
			    <div class="form-group">
			        <label for="userName">Gebruikersnaam</label>
			        <input type="text" name="userName" id="userName">
			    </div>

			    <div class="form-group">
			        <label for="userEmail">Email</label>
			        <input type="email" name="userEmail" id="userEmail">
			    </div>

			    <div class="form-group">
			        <label for="userPassword">Wachtwoord</label>
			        <input type="password" name="userPassword" id="userPassword">
			    </div>

			    <input class="reg btn" type="submit" value="Registreer!">
			</form>
        </div>
    </main>
<?php
require 'footer.php';
?>