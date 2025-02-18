<?php

namespace src;

require "src/extrator/Arquivo.php";
require "src/extrator/Txt.php";
require "src/extrator/Csv.php";
use src\extrator;

class Leitor
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio() : string { return $this->diretorio; }
    public function getArquivo() : string { return $this->arquivo; }
    public function setDiretorio(string $diretorio) : void { $this->diretorio = $diretorio; }
    public function setArquivo(string $arquivo) : void { $this->arquivo = $arquivo; }

    public function lerArquivo() : array
    {
        $caminho = $this->getDiretorio().'/'.$this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\src\extrator\\' . ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );
    }
}

?>