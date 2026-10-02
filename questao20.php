<?php
$horasTrabalhadas = (float) $_GET['horas']; // total nos 4 dias

$jornadaNormal = 60 * 4; // 240 horas

if ($horasTrabalhadas > $jornadaNormal) {
    $extras = $horasTrabalhadas - $jornadaNormal;
    $descanso = $extras * 1.5;
} else {
    $extras = 0;
    $descanso = 0;
}

echo "Horas trabalhadas: $horasTrabalhadas<br>";
echo "Jornada normal (4 dias): $jornadaNormal horas<br>";
echo "Horas extras: $extras<br>";
echo "Descanso adicional: $descanso horas";
?>