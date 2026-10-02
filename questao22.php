<?php
$professor = strtoupper($_GET['professor']); // RENATA ou ISRAEL
$dia = strtoupper($_GET['dia']); // SEGUNDA, TERCA, QUARTA, QUINTA, SEXTA
$disciplina = strtoupper($_GET['disciplina']);

$alocado = true;

if ($professor == "RENATA") {
    if ($dia == "SEGUNDA") {
        $alocado = false;
    } elseif ($dia == "TERCA" && $disciplina != "PROPULSAO DE FOGUETES") {
        $alocado = false;
    }
} elseif ($professor == "ISRAEL") {
    if ($dia == "SEXTA") {
        $alocado = false;
    } elseif ($dia == "QUINTA" && $disciplina != "ESTRUTURAS DE FOGUETES") {
        $alocado = false;
    }
} else {
    $alocado = false;
}

if ($alocado) {
    echo "Aula de $disciplina alocada com sucesso para $professor na $dia.";
} else {
    echo "Não foi possível alocar a aula de $disciplina para $professor na $dia.";
}
?>