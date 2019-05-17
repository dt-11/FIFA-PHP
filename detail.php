<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 17-5-2019
 * Time: 09:12
 */
require 'config.php';
$id = $_GET ['id'];
$sql = "SELECT * FROM users WHERE userId = :id ";
$prepare = $query = $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$user=$prepare->fetch(PDO::FETCH_ASSOC);
?>

<h1>voeg <?php echo $user['userName'] ?> aan een team toe</h1>

<form action="playerController.php?id=<?=$id?>" method="post">
    <input type="hidden" name="type" value="update">
    <div class="form-group">
        <label  for="userTeam">Team naam veranderen</label>
        <input type="text" name="userTeam" value="<?=htmlentities($user['userTeam'])?>">
    </div>
    <input type="submit" value="update">
</form>
