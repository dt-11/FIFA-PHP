<?php
require 'header.php';

require 'config.php';

$sql = "SELECT * FROM matches";

$query = $db->query($sql);

$matches = $query->fetchAll(PDO::FETCH_ASSOC);

?>
    <main>
        <div class="container">
            <h2>Wedstrijd schema</h2>
            <div class="match-overview">
                <?php
                foreach ($matches as $match){
                    $teamA = $match['teamAId'];
                    $teamB = $match['teamBId'];
                    echo "<div class='match'>$teamA - $teamB</div>";
                }
                ?>
            </div>
        </div>
    </main>
<?php
require 'footer.php';
?>