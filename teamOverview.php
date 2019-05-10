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
        if(isset($_SESSION['adminID'])) {
            foreach ($teams as $team) {
                $teamName = htmlentities($team['teamName']);
                echo "<li>$teamName</li> <form action=\"createTeamController.php\" method=\"post\">
                                         <input type=\"hidden\" name=\"type\" value=\"delete\">
                                         <input type=\"submit\" value=\"Delete\">
        </form>";
            }
        }
        else {
            foreach ($teams as $team) {
                $teamName = htmlentities($team['teamName']);
                echo "<li>$teamName</li>";
            }
        }
        ?>
    </ul>
</div>

</body>




