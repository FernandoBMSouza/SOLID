<?php

require "src/Poligono.php";
require "src/poligonos/Retangulo.php";
require "src/poligonos/Quadrado.php";

use src\Poligono;
use src\poligonos\Quadrado;
use src\poligonos\Retangulo;

echo '<h3>------------ Retangulo ------------</h3>';

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Retângulo: '.$poligono->getArea().'</h3>';

echo '<h3>------------ Quadrado ------------</h3>';

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(5);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do quadrado: '.$poligono->getArea().'</h3>';

?>