<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 13.12.2018
 * Time: 10:28
 */
class Tabel
{
//     klassi omadused
    var $tabel = array();
//    klassi meetodid
    /**
     * Tabel constructor.
     */
    public function __construct()
    {
        echo 'Tabel tüüpi objekt on loodud<br>';
    }
    /**
     * @param $rida - massiiv rea elementidega
     */
    function lisaRida($rida){
        $this->tabel[] = $rida;
    }
    /**
     * vaata tabel massiiv foreach abil ridade kaupa
     * ja väljasta iga rea see olev element tühikuga eraldes
     * read eralda reavahetusega
     */
    function naitaTabel(){
        foreach ($this->tabel as $rida){
            foreach ($rida as $element){
                echo $element.'&nbsp;';
            }
            echo '<br>';
        }
    }
}