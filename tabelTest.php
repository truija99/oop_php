<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 13.12.2018
 * Time: 10:44
 */

//Loen sisse Tabel.php faili sisu
//pöördub faili mida hakkan nõudma ja paneb selle tööle, peab ainult ütlema faili asukoha
require_once './Tabel.php'; //siinsamas kus ma asun, peab asuma see fail

// loome tabeli objekti
$lihtTabel = new Tabel();

// lisame read sisuga - punk javas, siin noolemärk
$lihtTabel->lisaRida(array(1, 2, 3));
$lihtTabel->lisaRida(array(4, 5, 6));
$lihtTabel->lisaRida(array(7, 8, 9));


var_dump($lihtTabel);
echo '<pre>';
print_r($lihtTabel);
echo '</pre>';


// väljastame tabeli
$lihtTabel->naitaTabel();