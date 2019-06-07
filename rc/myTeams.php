<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:42
 */
require 'header.php';
require 'config.php';

$id = $_SESSION['sID'];

$sql = "SELECT * FROM teams WHERE teamUserId = :teamUserId";

$prepare = $db->prepare($sql);
$prepare->bindParam(":teamUserId", $id);
$prepare->execute([
    ':teamUserId' => $id
]);
$teams = $prepare->fetchAll(PDO::FETCH_ASSOC);

if(!isset($_SESSION['sID'])){
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>
    <main>
        <div class="container">
            <div class="my-teams">
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
    </main>
<?php
require 'footer.php';
?>