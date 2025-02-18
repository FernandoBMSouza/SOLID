<?php

namespace src;

class Retangulo
{
    protected $largura;
    protected $altura;

    public function getLargura() : float { return $this->largura; }
    public function getAltura()  : float { return $this->altura; }
    
    public function setLargura(float $largura) : void { $this->largura = $largura; }
    public function setAltura(float $altura)   : void { $this->altura = $altura; }

    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

?>