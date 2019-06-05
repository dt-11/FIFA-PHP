<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20-5-2019
 * Time: 10:29
 */
require 'header.php';
require 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `teams` WHERE teamId = :id";

$prepare = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$team = $prepare->fetch(PDO::FETCH_ASSOC);

?>

    <main>
        <div class="container">
            <h3><?php echo $team['teamName'];?></h3>
            <?php
                echo "<a href='./editTeam.php?id={$team['teamId']}'>Bewerk dit team</a>";
            ?>
        </div>
    </main>

<?php
require 'footer.php';
?>
