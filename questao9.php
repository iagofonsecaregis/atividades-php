<?php
$p1 = strtoupper($_GET['p1']); // Telefonou para a vítima?
$p2 = strtoupper($_GET['p2']); // Esteve no local do crime?
$p3 = strtoupper($_GET['p3']); // Mora perto da vítima?
$p4 = strtoupper($_GET['p4']); // Devia para a vítima?
$p5 = strtoupper($_GET['p5']); // Já trabalhou com a vítima?

$sim = 0;
if ($p1 == "SIM") $sim++;
if ($p2 == "SIM") $sim++;
if ($p3 == "SIM") $sim++;
if ($p4 == "SIM") $sim++;
if ($p5 == "SIM") $sim++;

if ($sim == 5) {
    $resultado = "Assassino";
} elseif ($sim == 3 || $sim == 4) {
    $resultado = "Cúmplice";
} elseif ($sim == 2) {
    $resultado = "Suspeita";
} else {
    $resultado = "Inocente";
}

echo "Respostas SIM: $sim<br>";
echo "Classificação: $resultado";
?>