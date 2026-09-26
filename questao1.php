<?php
$n1=(int)$_GET["num1"];
$n2=(int)$_GET["num2"];
$n3=(int)$_GET["num3"];

if($n1>$n2){
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
}
if($n2>$n3){
    $temp=$n2;
    $n2=$n3;
    $n3=$temp;

}
if($n1>$n2){
    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
}
echo "Ordem crescente: $n1, $n2, $n3";
?>