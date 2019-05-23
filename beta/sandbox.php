<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20-5-2019
 * Time: 10:57
 */
require "config.php";

$sql = "SELECT * FROM users";
$query = $db->query($sql);
$names = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<select name="" id="">
    <?php
        foreach ($names as $name){
            $userName = $name['userName'];
            echo "<option>$userName</option>";
        }
    ?>
</select>
