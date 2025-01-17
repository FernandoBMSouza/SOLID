<?php

include "src/CarrinhoCompra.php";

use src\CarrinhoCompra;

echo '<h3>Sem SRP</h3>';

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();

$carrinho1->adicionarItens('Bicicleta', 750.10);
$carrinho1->adicionarItens('Geladeira', 1950.15);
$carrinho1->adicionarItens('Tapete',    350.20);
echo "<br />";

print_r($carrinho1->exibirItens());
echo "<br />";
echo 'Valor total recalculado: '.$carrinho1->exibirValorTotal();
echo "<br />";

echo 'Status: '.$carrinho1->exibirStatus();

echo "<br />";
if($carrinho1->confirmarPedido())
{
    echo 'Pedido realizado com sucesso!';
} 
else
{
    echo 'Erro na confirmação do pedido: Carrinho vazio';
}

echo "<br />";
echo 'Status: '.$carrinho1->exibirStatus();

?>