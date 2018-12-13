<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 13.12.2018
 * Time: 11:04
 */

require_once './Tabel.php';  //alati peab kirjutama, kui tahame kirjutada selle kohta uuesti
class HTMLTabel extends Tabel
{


    /**
     * HTMLTabel constructor.
     */
    public function __construct()
    {
        echo 'HTML';
        parent:: __construct();
    }

    /**
     * vaata tabel massiiv foreach abil ridade kaupa
     * ja väljasta HTML tabeli kujul
     */
    function naitaTabel()
    {
        echo '<table style: border="1px solid black";>';
        foreach ($this->tabel as $rida){        //tabel.php asi kättesaadav
            echo '<tr>';
            foreach ($rida as $element){ ;
                echo '<td>' . $element . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    }
}









