<?php
$a = (float) $_GET['a'];
$b = (float) $_GET['b'];
$c = (float) $_GET['c'];

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    if ($a == $b && $b == $c) {
        $tipo = "Equilátero";
    } elseif ($a == $b || $a == $c || $b == $c) {
        $tipo = "Isósceles";
    } else {
        $tipo = "Escaleno";
    }
    echo "Os valores formam um triângulo $tipo.";
} else {
    echo "Os valores não formam um triângulo.";
}
?>