<?php
$peso = (float) $_GET['peso'];
$altura = (float) $_GET['altura'];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $condicao = "Abaixo do peso";
} elseif ($imc < 25) {
    $condicao = "Peso normal";
} elseif ($imc < 30) {
    $condicao = "Acima do peso";
} elseif ($imc < 40) {
    $condicao = "Obeso";
} else {
    $condicao = "Obesidade grave";
}

echo "Peso: $peso Kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
echo "Condição: $condicao";
?>