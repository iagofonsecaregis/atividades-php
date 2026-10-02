<?php
$preco = (float) $_GET['preco'];
$codigo = (int) $_GET['codigo'];

if ($codigo == 1) {
    $total = $preco * 0.90;
    $condicao = "À vista em dinheiro (10% de desconto)";
} elseif ($codigo == 2) {
    $total = $preco * 0.95;
    $condicao = "À vista no cartão (5% de desconto)";
} elseif ($codigo == 3) {
    $total = $preco;
    $condicao = "3 vezes sem juros";
} elseif ($codigo == 4) {
    $total = $preco * 1.10;
    $condicao = "6 vezes com juros de 10%";
} else {
    $total = 0;
    $condicao = "Código inválido";
}

echo "Preço de etiqueta: R$ " . number_format($preco, 2, ',', '.') . "<br>";
echo "Condição: $condicao<br>";
echo "Total a pagar: R$ " . number_format($total, 2, ',', '.');
?>