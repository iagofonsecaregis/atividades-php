<?php
$nota1 = (float)$_GET["nota1"];
$nota2 = (float)$_GET["nota2"];

$media = ($nota1 + $nota2) / 2;

if($media>=9){
    $conceito = "A";
}
else if($media>=7.5 && $media<9){
    $conceito = "B";
}
else if($media>=6 && $media<7.5){
    $conceito = "C";
}
else if($media>=4 && $media<6){
    $conceito = "D";
}
else{
    $conceito = "E";
}

if($conceito=="A" || $conceito=="B" || $conceito=="C"){
    $situacao = "Aprovado";
}
else{
    $situacao = "Reprovado";
}
?>