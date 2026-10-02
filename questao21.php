<?php
$totalHoras = (int) $_GET['totalHoras'];

$mixxy = 0;
$ninin = 0;
$vezMixxy = true; // começa com Mixxy

$restante = $totalHoras;

while ($restante > 0) {
    $bloco = min(6, $restante); // trabalha no máximo 6h por vez

    if ($vezMixxy) {
        $mixxy += $bloco;
    } else {
        $ninin += $bloco;
    }

    $restante -= $bloco;
    $vezMixxy = !$vezMixxy; // alterna
}

echo "Total do plantão: $totalHoras horas<br>";
echo "Mixxy-X789 trabalhou: $mixxy horas<br>";
echo "Ninin-X989 trabalhou: $ninin horas";
?>