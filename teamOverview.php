<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 18-4-2019
 * Time: 11:25
 */
require "header.php";

require 'config.php';

$sql = "SELECT * FROM teams";

$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<body>

<h2>Team Overzicht</h2>
<div class="overzicht">
    <ul>
        <?php
            foreach ($teams as $team) {
                $teamName = htmlentities($team['teamName']);
                echo "<li><a href='detail.php'> $teamName</a></li>";
            }
        ?>
    </ul>
</div>

</body>




