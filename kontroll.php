<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 11.12.2018
 * Time: 9:22
 */

//Ülesanne 1
/*Loo prgogramm, mille sees:
a) defineeritud muutujate abil
    Sinu ees -ja perekonnanimi
    Kursuse tähis
    Kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga hmtl faili kujul
*/

//muutujate defineerimine - ainult nimetamine
$eesnimi = 'Mari-Liis';
$perenimi = 'Truija';
$kursusetahis = 'KD';
$kursusenumber = '18';
$email = 'mari-liis.truija@khk.ee';

//muutujate esile kutsumine, FUNKTSIOON (ilma selleta ei saaks html osas kirjutada)
var_dump($eesnimi);
var_dump($perenimi);
var_dump($kursusetahis);
var_dump($kursusenumber);
var_dump($email);

//kutsun esile, väljastan koodis

echo'
    <!doctype html> 
        <head>
            <title>Ülesanne1</title>
        </head>
        <body>
            <h1>'.$eesnimi.' '.$perenimi.'</h1>
            <h1>'.$kursusetahis.' '.$kursusenumber.'</h1>
            <h1>'.$email.'</h1>
        </body>
    </html>
';
