<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 06.12.2018
 * Time: 11:08
 */

// funktsioonid
//f function
/*
 function funktsiooniNimi({$param1, $param2,...., $paramN}) {
      kõik tegevused,
      mis antud funktsiooni sees toimuvad
 }
 */
function htmlTable(){
echo '<table>';
$ridadeArv = 4;
$veergudeArv = 6;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo '<td>';
            echo $veeruNumber;
            echo '</td>';
        }
            echo '</tr>';
    }
echo '</table>';
}

//lehe sisu väljastamine
echo '<!doctype html><html><head>
<title>Funktsioonid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';

//kutsume funktsiooni tööle
htmlTable();
echo '</body></html>';
?>

