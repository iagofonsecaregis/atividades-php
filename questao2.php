<?php
$n1=(int)$_GET["num1"];
$n2=(int)$_GET["num2"];
$n3=(int)$_GET["num3"];

if($n1>=$n2 && $n1>=$n3){
    $maior=$n1;
}
else if($n2>=$n1 && $n2>=$n3){
    $maior=$n2;
}
else{
    $maior=$n3;
}

if($n1<=$n2 && $n1<=$n3){
    $menor=$n1;
}
else if($n2<=$n1 && $n2<=$n3){
    $menor=$n2;
}
else{
    $menor=$n3;
}
echo "O maior número é: $maior .<br>";
echo "O menor número é: $menor .";
?>