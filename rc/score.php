<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27-5-2019
 * Time: 08:54
 */
require 'header.php';
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT matches.matchId, tA.teamName AS teamA, tB.teamName AS teamB FROM matches
        INNER JOIN teams tA
        ON matches.teamAId = tA.teamid
        INNER JOIN teams tB
        ON matches.teamBId = tB.teamId
        WHERE matchId = :id";
$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$match = $prepare->fetch(PDO::FETCH_ASSOC);
?>

<main>
    <div class="container">
        <form action="teamController.php?id=<?=$match['matchId'];?>" method="post">
            <input type="hidden" name="type" value="score">
            <div class="end-scores">
                <div class="end-score">
                    <h2><?php echo $match['teamA'];?></h2>
                    <label for="teamAScore">Eindscore</label>
                    <input type="number" name="teamAScore">
                </div>
                <div class="end-score">
                    <h2><?php echo $match['teamB'];?></h2>
                    <label for="teamBScore">Eindscore</label>
                    <input type="number" name="teamBScore">
                </div>
            </div>
            <button formaction="teamController.php?id=<?=$match['matchId'];?>" type="submit">lalalal</button>
        </form>
    </div>
</main>
