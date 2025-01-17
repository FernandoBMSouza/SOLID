<?php

require "src/CarrinhoCompra.php";
require "src/Item.php";
require "src/Pedido.php";
require "src/EmailService.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();
//----------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copo');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);
//-----------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//-----------------------------------
echo '<h4>Pedidos</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//-----------------------------------
echo '<h4>Valor do pedido:</h4>';
echo $pedido->getValor();
//-----------------------------------
echo '<h4>Carrinho está válido?</h4>';
if($pedido->getCarrinhoCompra()->validarCarrinho()) echo 'Sim';
else echo 'Não';
//-----------------------------------
echo '<h4>Status pedidos:</h4>';
echo $pedido->getStatus();
//-----------------------------------
echo '<h4>Confirmar pedidos:</h4>';
if($pedido->confirmar()) echo 'Confirmado';
else echo 'Não confirmado';
//-----------------------------------
echo '<h4>E-mail:</h4>';
if($pedido->getStatus() == 'confirmado')
    echo EmailService::dispararEmail();
?>