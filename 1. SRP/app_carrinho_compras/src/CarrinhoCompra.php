<?php

namespace src;

class CarrinhoCompra
{
    private $itens;
    private $status;
    private $valorTotal;

    public function __construct()
    {
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens()
    {
        return $this->itens;
    }

    public function itemValido(string $item, float $valor)
    {
        if($item = '' || $valor <= 0) return false;
        return true;
    }

    public function adicionarItens(string $item, float $valor)
    {
        if($this->itemValido($item, $valor))
        {
            array_push($this->itens, ["item" => $item, "valor" => $valor]);
            $this->valorTotal += $valor;
            return true;
        }
        return false;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if($this->validaCarrinho())
        {
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
    }

    public function enviarEmailConfirmacao()
    {
        echo '<br/>... envia e-mail de confirmacao ...<br/>';
    }

    public function validaCarrinho()
    {
        return count($this->itens) > 0;
    }
}

?>