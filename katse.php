<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 06.12.2018
 * Time: 11:08
 */
// massiivid
// array()
/*
$massiiv = array(); // tühi massiiv - ei ole sees midagi
$massiiv[] = väärtus;
 */


//abifunktsioon
function suguVarv($sugu){
    if($sugu == 'naine'){
        echo '<div style="color: red">';
    } else {
        echo '<div style="color: blue">';
    }
}

//koostame funktsiooni
function valjastaInfo($massiiv){
    foreach ($massiiv as $alamMassiivNimi => $alamMassiivAndmed){
        suguVarv($alamMassiivAndmed['sugu']);
        echo '<h5>'.$alamMassiivNimi.'</h5><br>';
        foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus){
            suguVarv($alamMassiivAndmed['sugu']);
            echo $elemendiNimi.' - '.$elemendiVaartus.'</div>';
        }
        echo '<hr>';
    }
}


//funktsioon soo järgi sorteerimiseks
function suguVordlus($porsas1, $porsas2){
    if($porsas1 ['sugu'] == $porsas2 ['sugu']) {
        return 0; }
    return ($porsas1['sugu'] < $porsas2['sugu']) ? -1 : 1; //-1 liigutab vasakule
}

/*function sortSooJargi($perekond){
       // usort($perekond, 'suguVordlus');
}
*/

// massiivi loomine
$perekondPeppa = array(
    'Peppa' => array(
        'nimi' => 'Peppa',
        'amet' => 'põrsaslaps',
        'vanus' => 5,
        'sugu' => 'naine'
    ),
    'Georg' => array(
        'nimi' => 'Georg',
        'amet' => 'põrsaslaps',
        'vanus' => 2,
        'sugu' => 'mees'
    ),
        'Põrsas Ema' => array(
        'nimi' => 'Ema',
        'amet' => 'Ema Põrsas',
        'vanus' => 35,
        'sugu' => 'naine'
    ),
        'Põrsas Isa' => array(
        'nimi' => 'Isa',
        'amet' => 'Isa Põrsas',
        'vanus' => 36,
        'sugu' => 'mees'
    ),
);

//sort($perekondPeppa);
//asort($perekondPeppa);
//ksort($perekondPeppa);
uasort ($perekondPeppa, 'suguVordlus');


// lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Massiivid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

valjastaInfo($perekondPeppa);

echo '</body></html>';
?>