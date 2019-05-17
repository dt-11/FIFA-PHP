<?php
/**
 * Created by PhpStorm.
 * User: Charlotte van Oers
 * Date: 16-5-2019
 * Time: 09:41
 */
require 'header.php';
require 'config.php';
$sql = "SELECT * FROM users";
$query = $db->query($sql);
$users= $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add player</title>
    <?php
        foreach ($users as $user){
            $name = htmlentities($user['userName']);
            echo "<li><a href='detail.php?id={$user['userId']}'>$name</a></li>";
        }
    ?>
</head>
<body>

</body>
</html>

<?php
require 'footer.php';
?>
