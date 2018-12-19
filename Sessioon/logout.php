<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 19.12.2018
 * Time: 11:17
 */

session_start();
// echo session_id();
session_destroy();
header('Location: login.php');
?>