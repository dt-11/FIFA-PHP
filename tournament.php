<?php
require 'header.php';

require 'config.php';

$sqlGetTourmaent = "SELECT matches.matchId, tA.teamName AS teamA, tB.teamName AS teamB FROM matches
        INNER JOIN teams tA
        ON matches.teamAId = tA.teamid
        INNER JOIN teams tB
        ON matches.teamBId = tB.teamId";

$query = $db->query($sqlGetTourmaent);

$matches = $query->fetchAll(PDO::FETCH_ASSOC);

?>
    <main>
        <div class="container">
            <h2>Wedstrijd schema</h2>
            <div class="match-overview">
                <?php
                if (isset($_SESSION['adminID'])){
                    foreach ($matches as $match){
                        $teamA = $match['teamA'];
                        $teamB = $match['teamB'];
                        echo "<div class='match-admin'>
                                <p>$teamA - $teamB</p>
                                    <a href='./score.php?id={$match['matchId']}' class='score-btn'>Voer score in</a>
                              </div>";
                    }
                }
                else{
                    foreach ($matches as $match){
                        $teamA = $match['teamA'];
                        $teamB = $match['teamB'];
                        echo "<div class='match'><p>$teamA - $teamB</p></div>";
                    }
                }
                ?>
            </div>
        </div>
    </main>
<?php
require 'footer.php';
?>


