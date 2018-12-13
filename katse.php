<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 06.12.2018
 * Time: 11:08
 */

// massiivid
// array()
/*
$massiiv = array(); // tühi massiiv - ei ole sees midagi
$massiiv [] = väärtus

 */

$nimed = array();
$nimed[] = 'Mari-Liis';
$nimed[] = 'Elen';
var_dump($nimed); //väljastab selle ülemise asja seal
echo '<pre>';
print_r($nimed);
echo '/<pre>';


function htmlTable($ridadeArv, $veergudeArv){
    $tabel = '<table>';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        $tabel = $tabel.'<tr>';
            for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
                $tabel = $tabel.'<td>';
                $tabel = $tabel.$veeruNumber;
                $tabel = $tabel.'</td>';
            }
        $tabel = $tabel.'</tr>';
        }
     $tabel = $tabel.'</table>';
     return $tabel; //tagastatakse tabel, veel ei väljastata (ainult echo kaudu)
}

//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

//kutsume funktsiooni tööle
$tabel1 = htmlTable(4, 4);
echo $tabel1;
echo '<hr>';

$tabel2 = htmlTable(2, 4);
echo $tabel2;
echo '<hr>';
$tabel3 = htmlTable(1, 1);
echo $tabel3;
echo '<hr>';
echo '</body></html>';
?>

