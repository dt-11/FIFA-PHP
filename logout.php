<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10-5-2019
 * Time: 12:48
 */
header('Location: index.php');
session_start();
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);