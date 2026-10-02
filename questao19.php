<?php
$velocidade = (float) $_GET['velocidade'];
$cansada = strtoupper($_GET['cansada']); // SIM ou NAO
$chovendo = strtoupper($_GET['chovendo']); // SIM ou NAO

$max = 20;
$min = 10;

if ($cansada == "SIM") {
    $max = 15;
}

if ($chovendo == "SIM") {
    $max = min($max, 12);
}

if ($velocidade >= $min && $velocidade <= $max) {
    echo "Velocidade adequada! ($velocidade km/h)";
} else {
    echo "Velocidade inadequada! Limite atual: $min a $max km/h.";
}
?>