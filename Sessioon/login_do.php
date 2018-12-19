<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 19.12.2018
 * Time: 10:40
 */

session_start(); // jätkame login.php faili sessiooni


if (empty($_POST)) {
    header('Location: login.php');
    //  kui kirjutad url-i näiteks /login.php asemel /login_do.php,
    //  siis ta ikkagi viib sind login.php lehele
    $_SESSION['viga'] = 'Täida vormi andmed';
}

else if(empty($_POST['username'])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta kasutajanimi';
} else if (empty($_POST['passwd'])){
    header('Location: login.php');
    $_SESSION['viga'] = 'Sisesta parool';
}