<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 13.12.2018
 * Time: 10:28
 */

class Tabel
{
//  klassi omadused
    var $tabel = array(); //variable, klassi muutuja = tühi massiiv

//  klassi meetodid

    /**
     * @param $rida - massiiv rea elemendiga
     */
    function lisaRida($rida){
        $this ->tabel[] = $rida;
}


    /**
     * vaata tabel massiiv foreach abil ridade kaupa
     * ja v äljasta iga rea see olev element tühikuga eraldades
     * read eralda reavahetusega
     */

    function naitaTabel(){
        foreach($this->tabel as $rida){
            foreach($rida as $element){
                echo $element.'&nbsp';
            }
            echo '<br>';
        }
    }


}