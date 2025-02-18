<?php

require "src/Leitor.php";
use src\Leitor;

// ---------------- TXT ----------------

$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();

// ---------------- CSV ----------------

$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();

// --------------- MERGE ---------------

echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '</pre>';

?>