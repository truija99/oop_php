<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 06.12.2018
 * Time: 11:08
 */
echo '<!doctype html><html><head>
<title>Tsüklid</title>
<link rel="stylesheet" type="text/css" href="katsestyle.css">
</head><body>';
// tsüklid
// for
/*
 for($juhtimisM=algvaartus; $juhtimisM < lõppväärtus; $juhtimisM++){
    tegevused, mis toimuvad nii kaua, kui $juhtimisM < lõppväärtus kehtib
}
 */
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
echo '</body></html>';
?>

