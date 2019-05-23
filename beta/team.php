<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20-5-2019
 * Time: 10:29
 */
require 'header.php';
require 'config.php';

$id = $_GET['teamId'];

$sql = "SELECT * FROM teams WHERE teamId = :teamId";

$prepare = $db->prepare($sql);
$prepare->execute([
    ':teamId' => $id
]);
$team = $prepare->fetch(PDO::FETCH_ASSOC);

var_dump($team);
//?>
<!---->
<!--    <main>-->
<!--        <div class="container">-->
<!--            <h3>--><?php //echo $team['teamName'];?><!--</h3>-->
<!--        </div>-->
<!--    </main>-->
<!---->
<?php
//require 'footer.php';
//?>
