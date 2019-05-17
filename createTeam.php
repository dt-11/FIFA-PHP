<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 17-5-2019
 * Time: 08:41
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

                <input type="button" value="Aanmaken" onclick="window.location.href='myTeams'" />
            </form>
        </div>
    </main>
<?php
require 'footer.php';
?>