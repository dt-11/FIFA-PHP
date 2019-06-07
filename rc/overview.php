<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:39
 */
require 'header.php';

require 'config.php';

$sql = "SELECT * FROM teams";
$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);
?>
    <main>
        <div class="container">
				<?php
			        	echo "<div class=\"teams-normal\">";
			        	foreach ($teams as $team) {
			                $teamName = htmlentities($team['teamName']);
			                echo "<div class=\"team\">$teamName</div>
			                ";
			            }
			        	echo "</div>";
				?>
        </div>
    </main>
<?php
require 'footer.php';
?>

