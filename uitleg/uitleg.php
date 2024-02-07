<?php

class Fruit{
    public $naam;
    public $kleur;



    function __construct($naam, $kleur)
    {
        $this->naam = $naam;
        $this->kleur = $kleur;
    }


}
$fruit = new Fruit('banaan', 'geel');
$fruit2 = new Fruit('appel', 'rood');

echo '<pre>';
print_r($fruit);
echo '</pre>';

echo '<pre>';
print_r($fruit2);
echo '</pre>';

?>


