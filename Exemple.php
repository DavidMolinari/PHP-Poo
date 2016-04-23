<?php
require 'Personnage.php';
require 'Archer.php';

$Michel = new Personnage('Michel');
$Patrick = new Personnage('Patrick');

$Legolas = new Archer('Legolas', 70);


var_dump($Patrick, $Legolas);

$Legolas->attack($Patrick);

var_dump($Patrick, $Legolas);



 ?>
