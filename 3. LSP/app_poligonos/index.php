<?php

require "src/Quadrado.php";
use src\Retangulo;

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do Retângulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setLargura(5);
echo '<h3>Área do Quadrado: '.$quadrado->getArea().'</h3>'

?>