<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 11.12.2018
 * Time: 9:22
 */
echo '<html><head><title>Ülesanded</title><link rel="stylesheet" type="text/css" href="katsestyle.css"></head><body>';

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/

echo '<h4>Ülesanne 1</h4>';
$eesNimi = 'Mari-Liis';
$pereNimi = 'Truija';
$kursus = 'KD';
$kursuseTahis = "18";
$email = 'mari-liis.truija@ikt.khk.ee';
echo 'Eesnimi: '.$eesNimi.'<br>';
echo 'Perenimi: '.$pereNimi.'<br>';
echo 'Kursus: '.$kursus.'<br>';
echo 'Kursuse tähis:'.$kursuseTahis.'<br>';
echo 'Email:'.$email.'<br>';
echo '<hr>';




// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange - vastavalt tingimuslauses määra punane, sinine ja orange
*/

echo '<h4>Ülesanne 2</h4>';
$varv = 'orange';
echo '<p style="color: ';
if($varv == 'punane'){
    echo 'red';
} else if($varv == 'sinine'){
    echo 'blue';
} else if($varv == 'orange'){
    echo 'orange';
} else {
    echo 'black';
}
echo ';">Värviline tekst</p>';
echo '<hr>';




//Ülesanne 3 - gradient tabel umbes nagu katse.php-s

echo '<h4>Ülesanne 3</h4>';
echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#';
        for ($i = 1; $i <= 6; $i++){
            $varv = $varv.dechex(rand(0, 16));
        }
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '<hr>';




// Ülesanne 4
/* Muuda htmlTabel() funktsioon nii, et see võtaks parameetrina numbrite massiivi
ja väljastas HTML tabelina
*/

echo '<h4>Ülesanne 4 </h4>';

function htmlTabel($massiiv){
    echo '<table>';
    foreach($massiiv as $rida){
        echo '<tr>';
        foreach($rida as $element) {
            echo '<td>';
            echo $element;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
htmlTabel($numbrid);
echo '<br>';
$symbolid = array(
    array('a', 'b'),
    array('d', 'e'),
    array('g', 'h')
);
htmlTabel($symbolid);



// Ülesanne 5






echo '</body></html>';