<?php
echo " [1] Quilômetros -> Milhas\n [2] Celsius -> Fahrenheit\n [3] Quilos -> Libras\n [4] Metros -> Pés";
$escolha=readline("Escolha o tipo de conversão: ");
$valor=readline("Qual o valor que deseja converter? ");
if (is_numeric($valor) && $valor>0) {
 switch ($escolha) {
  case $escolha==1:
    $result=$valor*0.621371;
    echo "$valor Km são aproximadamente $result Milhas";
    break;
  case $escolha==2:
    $result=($valor*9/5)+32;
    echo "$valor C° são aproximadamente $result F°";
    break;
  case $escolha==3:
    $result=$valor*2.20462;
    echo "$valor KG são aproximadamente $result Libras";
    break;
  case $escolha==4:
    $result=$valor*3.28084;
    echo "$valor Metros são aproximadamente $result Pés";
    break;  
  default: 
    echo "Erro!";
    }
} else {
  echo "Erro!";
}