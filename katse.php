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


// massiivi loomine
$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
// massiivi sisu test kontroll
var_dump($numbrid);
echo '<pre>';
print_r($numbrid);
echo '</pre>';

// massiivi elemendi väljastamine
echo $numbrid[1][1];
echo '<br>';

// massiivi suuruse kontroll - meil see on ridade arv
$ridadeArv = count($numbrid);
echo $ridadeArv;
echo '<br>';

// veergudeArv
$veergudeArv = count($numbrid[0]);
echo $veergudeArv;
echo '<br>';

// massiivi väljastamine for
for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++){
    for($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++){
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp;';
    }
    echo '<br>';
}

// massiivi väljastamine foreach abil
foreach ($numbrid as $rida){
    foreach ($rida as $number);{
        echo $number.'&nbsp';
    }
    echo  '<br>';
}


function htmlTabel($ridadeArv = 0, $veergudeArv = 0){
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
    return $tabel;
}
// lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
// kutsume funktsioon tööle
$tabel1 = htmlTabel(4, 4);
echo $tabel1;
echo '<hr>';
$tabel2 = htmlTabel(2, 5);
echo $tabel2;
echo '<hr>';
echo htmlTabel(1, 3);
echo '</body></html>';
?>