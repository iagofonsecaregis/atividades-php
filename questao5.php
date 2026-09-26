<?php
if (isset($_GET['valorHora']) && isset($_GET['horasTrabalhadas'])) {
    $valorHora = (float) $_GET['valorHora'];
    $horasTrabalhadas = (float) $_GET['horasTrabalhadas'];

    // Cálculo do salário bruto
    $bruto = $valorHora * $horasTrabalhadas;

    // FGTS - não é descontado do salário, é um benefício à parte
    $fgts = $bruto * 0.11;

    // Sindicato - 3% descontado do bruto
    $sindicato = $bruto * 0.03;

    // Cálculo do IR conforme a faixa
    if ($bruto <= 900.00) {
        $percentualIR = 0;
    } elseif ($bruto <= 1500.00) {
        $percentualIR = 5;
    } elseif ($bruto <= 2500.00) {
        $percentualIR = 10;
    } else {
        $percentualIR = 20;
    }
    $ir = $bruto * ($percentualIR / 100);

    // Total de descontos (sindicato + IR) - FGTS não entra aqui
    $totalDescontos = $sindicato + $ir;

    // Salário líquido
    $liquido = $bruto - $totalDescontos;

    // Exibição do resumo demonstrativo
    echo "<h3>Demonstrativo de Pagamento</h3>";
    echo "Salário Bruto: R$ " . number_format($bruto, 2, ',', '.') . "<br><br>";

    echo "<u>Descontos:</u><br>";
    echo "Sindicato (3%): R$ " . number_format($sindicato, 2, ',', '.') . "<br>";
    echo "IR (" . $percentualIR . "%): R$ " . number_format($ir, 2, ',', '.') . "<br>";
    echo "Total de Descontos: R$ " . number_format($totalDescontos, 2, ',', '.') . "<br><br>";

    echo "<u>Benefício (informativo, não descontado):</u><br>";
    echo "FGTS (11%): R$ " . number_format($fgts, 2, ',', '.') . "<br><br>";

    echo "<strong>Salário Líquido: R$ " . number_format($liquido, 2, ',', '.') . "</strong>";

} else {
    // Formulário simples para inserir os dados
    echo '
    <form method="GET" action="">
        Valor da hora: R$ <input type="text" name="valorHora"><br><br>
        Horas trabalhadas no mês: <input type="text" name="horasTrabalhadas"><br><br>
        <input type="submit" value="Calcular">
    </form>
    ';
}
?>