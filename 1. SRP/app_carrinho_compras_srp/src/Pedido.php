<?php

namespace src;
use src\CarrinhoCompra;

class Pedido
{
    private $status;
    private $carrinhoCompra;
    private $valor;

    public function __construct()
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valor = 0;
    }

    private function calcularValor()
    {
        $total = 0;
        foreach($this->carrinhoCompra->getItens() as $key => $item)
            $total += $item->getValor();
        return $total;
    }
    
    public function getCarrinhoCompra() { return $this->carrinhoCompra; }
    public function getStatus() { return $this->status; }
    public function getValor() 
    { 
        $this->valor = $this->calcularValor();
        return $this->valor; 
    }

    public function setStatus(string $status) { $this->status = $status; }

    public function confirmar() 
    {
        if($this->carrinhoCompra->validarCarrinho())
        {
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }
}

?>