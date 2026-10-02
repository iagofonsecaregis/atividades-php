<?php
$forca = (int) $_GET['forca'];
$inteligencia = (int) $_GET['inteligencia'];
$agilidade = (int) $_GET['agilidade'];

if ($forca > $inteligencia && $forca > $agilidade) {
    $classe = "Guerreiro";
} elseif ($inteligencia > $forca && $inteligencia > $agilidade) {
    $classe = "Mago";
} elseif ($agilidade > $forca && $agilidade > $inteligencia) {
    $classe = "Arqueiro";
} else {
    $classe = "Classe híbrida";
}

echo "Força: $forca<br>";
echo "Inteligência: $inteligencia<br>";
echo "Agilidade: $agilidade<br>";
echo "Classe: $classe";
?>