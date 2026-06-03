<?php
$numero1=readline("Digite o primeiro número: ");
$sinal=readline("Sínal da equação: ");
$numero2=readline("Digite o segundo número: ");
switch($sinal) {
  case $sinal=="+":
    $numero3=$numero1+$numero2;
    echo $numero3;
    break;
  case $sinal=="-":
    $numero3=$numero1-$numero2;
    echo $numero3;
    break;
  case $sinal=="x":
    $numero3=$numero1*$numero2;
    echo $numero3;
    break;
  case $sinal=="/" and $numero2!=0:
    $numero3=$numero1/$numero2;
    echo $numero3;
    break;
  default:
    echo "Classificação indicativa abaixo de 5 anos";
}
