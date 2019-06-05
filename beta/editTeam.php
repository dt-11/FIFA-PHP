<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:42
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
            <form action="teamController.php?id=<?=$id;?>">
                <input type="hidden" name="type" value="edit">

                <div class="form-group">
                    <label for="teamName">Teamnaam</label>
                    <input type="text" name="teamName" id="teamName" value="<?=htmlentities($team['teamName'])?>">
                </div>

                <div class="form-group">
                    <label for="playerValue">Aantal spelers</label>
                    <input type="number" name="playerValue" id="playerValue" value="<?=htmlentities($team['teamValue'])?>">
                </div>

                <input type="submit" value="Bewerken">
            </form>
        </div>
    </main>
<?php
require 'footer.php';
?>