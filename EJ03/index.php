<?php

require_once 'autoloader.php';

$AnimalGenerico = new Animal();
$Perro = new Perro();
$Gato = new Gato();

echo ($AnimalGenerico->hacerSonido() . "<br>");
echo ($Perro->hacerSonido() . "<br>");
echo ($Gato->hacerSonido() . "<br>");

?>