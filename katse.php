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
    foreach ($massiiv as $alammassiivNimi => $alamMassiivAndmed){
        suguVarv($alamMassiivAndmed['sugu']);
        echo '<h5>'.$alammassiivNimi.'</h5><br>';
        foreach ($alamMassiivAndmed as $elemendiNimi => $elemendiVaartus){
            suguVarv($alamMassiivAndmed['sugu']);
            echo $elemendiNimi.' - '.$elemendiVaartus.'</div>';
        }
        echo '<hr>';
    }
}

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
    )
);


// lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Massiivid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

valjastaInfo($perekondPeppa);

echo '</body></html>';
?>