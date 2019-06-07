<?php
require 'header.php';

require 'config.php';
$sql = "SELECT * FROM teams";

$query = $db->query($sql);

$teams = $query->fetchAll(PDO::FETCH_ASSOC);

$amountOfTeams = count($teams);

if(!isset($_SESSION['adminID'])){
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>
    <main>
        <div class="container">
            <div class="admin-cp">
                <div class="tournament">
                    <?php
                        echo "<p>Aantal teams: $amountOfTeams</p>";
                    ?>
                    <form action="createTournament.php">
                        <button class="create-tournament" formaction="createTournament.php" type="submit">Maak een toernooi!</button>
                    </form>
                    <a href="tournament.php">Bekijk het toernooi!</a>
                    <a href="overview.php">Bekijk de teams!</a>
                </div>
                <div class="user-options">
                    <p>Alle teams</p>
                    <ul>
                        <?php
                        foreach ($teams as $team){
                            $teamName = htmlentities($team['teamName']);
                            echo "<li><a href='./team.php?id={$team['teamId']}'>$teamName</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
<?php
require 'footer.php';
?>