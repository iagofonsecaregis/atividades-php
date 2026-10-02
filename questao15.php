<?php
$kwh = (float) $_GET['kwh'];

if ($kwh <= 100) {
    $valorKwh = 0.50;
} elseif ($kwh <= 200) {
    $valorKwh = 0.70;
} elseif ($kwh <= 300) {
    $valorKwh = 0.90;
} else {
    $valorKwh = 1.10;
}

$total = $kwh * $valorKwh;

echo "Consumo: $kwh kWh<br>";
echo "Valor do kWh: R$ " . number_format($valorKwh, 2, ',', '.') . "<br>";
echo "Valor total da conta: R$ " . number_format($total, 2, ',', '.');
?>