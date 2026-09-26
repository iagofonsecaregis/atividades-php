<?php
// Verifica se o salário foi enviado via GET
if (isset($_GET['salario'])) {
    $salarioAtual = (float) $_GET['salario'];

    // Define o percentual de acordo com a faixa salarial
    if ($salarioAtual <= 280.00) {
        $percentual = 20;
    } elseif ($salarioAtual > 280.00 && $salarioAtual <= 700.00) {
        $percentual = 15;
    } elseif ($salarioAtual > 700.00 && $salarioAtual <= 1500.00) {
        $percentual = 10;
    } else {
        $percentual = 5;
    }

    // Calcula o aumento e o novo salário
    $valorAumento = $salarioAtual * ($percentual / 100);
    $novoSalario = $salarioAtual + $valorAumento;

    // Exibe os resultados
    echo "Salário anterior: R$ " . number_format($salarioAtual, 2, ',', '.') . "<br>";
    echo "Percentual aplicado: " . $percentual . "%<br>";
    echo "Valor do aumento: R$ " . number_format($valorAumento, 2, ',', '.') . "<br>";
    echo "Novo salário: R$ " . number_format($novoSalario, 2, ',', '.') . "<br>";
} else {
    // Formulário simples para inserir o salário
    echo '
    <form method="GET" action="">
        Salário atual: R$ <input type="text" name="salario">
        <input type="submit" value="Calcular">
    </form>
    ';
}
?>