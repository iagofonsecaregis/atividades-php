<?php
$plantacaoPronta = strtoupper($_GET['pronta']); // SIM ou NAO
$sacas = (int) $_GET['sacas'];
$maquinaDisponivel = strtoupper($_GET['maquinaDisponivel']); // SIM ou NAO
$maquinaReserva = strtoupper($_GET['maquinaReserva']); // SIM ou NAO
$emManutencao = strtoupper($_GET['manutencao']); // SIM ou NAO

if ($plantacaoPronta == "SIM" && $sacas >= 100 &&
    ($maquinaDisponivel == "SIM" || $maquinaReserva == "SIM") &&
    $emManutencao == "NAO") {
    echo "A máquina pode iniciar a colheita!";
} else {
    echo "A colheita não pode ser iniciada. Verifique as condições.";
}
?>