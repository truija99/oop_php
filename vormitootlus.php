<?php

if(empty($_POST)) {
    echo '<a href="vorm.php">Logi sisse!</a>';
}




echo 'kasutajanimi ='.$_POST['username'].'<br>';
echo 'parool ='.$_POST['passwd'].'<br>';

echo 'Tere tulemast ='.$_POST['username'].'<br>';