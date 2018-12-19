<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 19.12.2018
 * Time: 10:36
 */

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

