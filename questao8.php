<?php
$valor = (int) $_GET['valor'];

if ($valor < 10 || $valor > 600) {
    echo "Valor inválido! O saque deve ser entre R$ 10 e R$ 600.";
} else {
    $notas100 = intdiv($valor, 100);
    $resto = $valor % 100;

    $notas50 = intdiv($resto, 50);
    $resto = $resto % 50;

    $notas10 = intdiv($resto, 10);
    $resto = $resto % 10;

    $notas5 = intdiv($resto, 5);
    $resto = $resto % 5;

    $notas1 = $resto;

    echo "Saque de R$ $valor:<br>";
    echo "Notas de 100: $notas100<br>";
    echo "Notas de 50: $notas50<br>";
    echo "Notas de 10: $notas10<br>";
    echo "Notas de 5: $notas5<br>";
    echo "Notas de 1: $notas1<br>";
}
?>