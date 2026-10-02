<?php
$horas = (float) $_GET['horas'];
$valorHora = (float) $_GET['valorHora'];

if ($horas <= 40) {
    $salario = $horas * $valorHora;
} elseif ($horas <= 60) {
    $normal = 40 * $valorHora;
    $extra = ($horas - 40) * $valorHora * 1.5;
    $salario = $normal + $extra;
} else {
    $normal = 40 * $valorHora;
    $extra1 = 20 * $valorHora * 1.5;
    $extra2 = ($horas - 60) * $valorHora * 2;
    $salario = $normal + $extra1 + $extra2;
}

echo "Horas trabalhadas: $horas<br>";
echo "Valor da hora: R$ " . number_format($valorHora, 2, ',', '.') . "<br>";
echo "Salário semanal: R$ " . number_format($salario, 2, ',', '.');
?>