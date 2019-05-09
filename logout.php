<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 9-5-2019
 * Time: 09:54
 */
header('Location: index.php');
session_start();
session_destroy();
setcookie(PHPSESSID,session_id(),time()-1);