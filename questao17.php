<?php
$linha = (int) $_GET['linha']; // 0, 1 ou 2
$coluna = (int) $_GET['coluna']; // 0, 1 ou 2
$numero = (int) $_GET['numero'];

$malha = [
    [1, 2, 3],
    [3, 1, 2],
    [2, 3, 0] // 0 representa a posição vazia
];

if ($numero < 1 || $numero > 3) {
    echo "Número inválido! Deve estar entre 1 e 3.";
} else {
    $repeteLinha = false;
    for ($i = 0; $i < 3; $i++) {
        if ($malha[$linha][$i] == $numero) {
            $repeteLinha = true;
        }
    }

    $repeteColuna = false;
    for ($i = 0; $i < 3; $i++) {
        if ($malha[$i][$coluna] == $numero) {
            $repeteColuna = true;
        }
    }

    if ($repeteLinha) {
        echo "Jogada inválida: número já existe na linha.";
    } elseif ($repeteColuna) {
        echo "Jogada inválida: número já existe na coluna.";
    } else {
        echo "Jogada válida!";
    }
}
?>