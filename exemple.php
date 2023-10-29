<?php
require 'Personnage.php';
require 'Archer.php';

$merlin = new Personnage('Merlin', 80, 50);
$harry = new Personnage('Harry', 80, 50);


$legolas = new Archer('legolas', 15, 50);

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);
?>