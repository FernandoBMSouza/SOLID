<?php

require "src/Leitor.php";
use src\Leitor;

$leitor = new Leitor();
$leitor->setDiretorio(__DIR__.'/arquivos');
$leitor->setArquivo('dados.csv');

echo '<pre>';
print_r($leitor->lerArquivo());
echo '</pre>';

?>