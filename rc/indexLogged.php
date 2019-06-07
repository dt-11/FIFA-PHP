<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:42
 */
require 'header.php';

if(!isset($_SESSION['sID'])){
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>
    <main>
        <div class="container">

        </div>
    </main>
<?php
require 'footer.php';
?>