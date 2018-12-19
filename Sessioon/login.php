<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 19.12.2018
 * Time: 10:36
 */


session_start(); //alustame anonüümse sessiooniga
echo session_id(); //näitab milline session töötab - pikk nr
echo '<br>';
echo '<div style="color:red">'.$_SESSION['viga'].'</div>';


//sessioon/login.php
?>

<form method="post" action="login_do.php">
    <div class="vorm">
        <label>Kasutajanimi: </label>
        <input type="text" name="username">
    </div>
    <div class="vorm">
        <label>Parool: </label>
        <input type="password" name="passwd">
    </div>
    <div class="vorm">
        <input type="submit" value="Logi sisse">
    </div>
</form>



<style>
    .vorm {
        margin: 15px;
    }

</style>

