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
		            if(isset($_SESSION['adminID'])) {
            			echo "<div class=\"teams\">";
            			foreach ($teams as $team) {
			                $teamName = htmlentities($team['teamName']);
			                echo "<div class=\"team\">$teamName</div>
			                		<form action=\"teamController.php\" method=\"post\">
										<input type=\"hidden\" name=\"type\" value=\"delete\">
										<button class=\"delete-btn\" formaction=\"teamController.php\" type=\"submit\">Delete</button>			                        
									</form>
			                		";
			        		}
			        	echo "</div>";	
			        }		
			        else{
			        	echo "<div class=\"teams-normal\">";
			        	foreach ($teams as $team) {
			                $teamName = htmlentities($team['teamName']);
			                echo "<div class=\"team\">$teamName</div>
			                ";
			            }
			        	echo "</div>";
		        	} 
				?>
        </div>
    </main>
<?php
require 'footer.php';
?>

