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

if(!isset($_SESSION['sID']) && $team['userId'] != $_SESSION['sID']){
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>

    <main>
        <div class="container">
            <h3><?php echo $team['teamName'];?></h3>
            <div class="team-options">
                <?php
                echo "<a href='./editTeam.php?id={$team['teamId']}'>Bewerk dit team</a>";
                if(isset($_SESSION['adminID'])){
                    echo "<form action=\"./teamController.php?id={$team['teamId']}\" method='post'>
                            <input type='hidden' name='type' value='delete'>
                            <input type='submit' value='Verwijder team'>
                          </form>";

                }
                ?>
            </div>
        </div>
    </main>

<?php
require 'footer.php';
?>
