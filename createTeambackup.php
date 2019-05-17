<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:48
 */
require 'header.php';

if ( !isset( $_SESSION['sID'] ) ) {
    header('location: index.php');
    exit;
}
?>
    <main>
        <div class="container">
			<h2>Team aanmaken</h2>

			<form action="teamController.php" method="post">
			    <input type="hidden" name="type" value="createTeam">

			    <div class="form-group">
			        <label for="teamName">Teamnaam</label>
			        <input type="text" name="teamName" id="teamName">
			    </div>

			    <div class="form-group">
			        <label for="playerValue">Aantal spelers</label>
			        <input type="number" name="playerValue" id="playerValue">
			    </div>

			    <input type="button" value="Aanmaken" onclick="window.location.href='addPlayer.php'" /> >
			</form>
        </div>
    </main>
<?php
require 'footer.php';
?>