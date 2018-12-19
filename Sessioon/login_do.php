<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 19.12.2018
 * Time: 10:40
 */
if (empty($_POST)) {
    header('Location: login.php');
    //  kui kirjutad url-i näiteks /login.php asemel /login_do.php,
    //  siis ta ikkagi viib sind login.php lehele
}

if(empty($_POST['username']) or empty($_POST ['passwd'])){
    header('Location: login.php');
}