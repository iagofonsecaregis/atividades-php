<?php
$tipo = (int) $_GET['tipo']; // 1-Filé Duplo, 2-Alcatra, 3-Picanha
$peso = (float) $_GET['peso'];
$cartao = strtoupper($_GET['cartao']); // "SIM" ou "NAO"

if ($tipo == 1) {
    $nome = "Filé Duplo";
    $preco = ($peso <= 5) ? 4.90 : 5.80;
} elseif ($tipo == 2) {
    $nome = "Alcatra";
    $preco = ($peso <= 5) ? 5.90 : 6.80;
} elseif ($tipo == 3) {
    $nome = "Picanha";
    $preco = ($peso <= 5) ? 6.90 : 7.80;
} else {
    $nome = "Inválido";
    $preco = 0;
}

$total = $peso * $preco;

if ($cartao == "SIM") {
    $desconto = $total * 0.05;
    $total = $total - $desconto;
} else {
    $desconto = 0;
}

echo "===== CUPOM FISCAL =====<br>";
echo "Produto: $nome<br>";
echo "Peso: $peso Kg<br>";
echo "Preço por Kg: R$ " . number_format($preco, 2, ',', '.') . "<br>";
echo "Desconto cartão: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Total a pagar: R$ " . number_format($total, 2, ',', '.');
?>