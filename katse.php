<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 06.12.2018
 * Time: 11:08
 */

//muutujate defineerimine
//$muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';

//muutujate sisu testvaatamine
var_dump($lehePealkiri); //funktsioon
echo '<br>'; //eraldi reale
var_dump($sisuPealkiri); //funktsioon

//andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP'; //TEKST ON JUTUMÄRKIDES ALATI
$toevaartusTrue = true; //BOOLEAN
$toevaartusFalse = false;  //BOOLEAN

//väärtuse tüübi kontroll - gettype($muutujaNimi)
//väärtuse tüübi teisendus - settype ($muutujaNimi, 'tüüp')

//väljastamine
//ühendamine 'tekst katkeb '.$muutujaNimi.' tekst jätkub'


// tingimuslaused
/*
 * if (tingimus == true) {
 *      siis toimub see osa
 * } else {
 *      muidu toimub see osa
 * }
 * */
$naitaSisu = false;
echo '
    <!doctype html>
    <html>
        <head>
            <title>'.$lehePealkiri.'</title>
        </head>
        <body>';
if($naitaSisu == true) {
    // sisu väljastamine
    echo '  <h1>' . $sisuPealkiri . '</h1>';
} else {
    echo 'Sisu on peidetud!';
}
// html lehe lõpp
echo '
        </body>
    </html>
';
?>