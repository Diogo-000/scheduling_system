<?php
$nome=readline("Digite seu nome: ");
$servico=readline("Digite seu serviço: ");
$horas=(float)readline("Digite a quan quantidade de horas de serviço: ");
$valorhora=(float)readline("Digite o valor da hora: ");
echo "[1] Cliente novo (sem desconto)
[2] Cliente recorrente (10% de desconto)
[3] Cliente VIP (20% de desconto)\n";
$tipo=readline("Qual tipo de cliente você é? ");
if (is_numeric($horas && $valorhora)) {
switch ($tipo) {
 case $tipo==1:
    $desconto=0;
    if ($horas<0 && $valorhora<0) {
    echo "Valores inválidos!";
} else {
    $subtotal= $horas * $valorhora;
    $valordesconto= $subtotal * ($desconto/100);
    $total= $subtotal - $valordesconto;
     echo "Nome do cliente: $nome\n Serviço: $servico\n Quantidade de horas: $horas\n Valor\hora: $valorhora\n Subtotal: $subtotal\n Desconto(%$desconto): -$valordesconto\n Valor final: $total";
} break;
 case $tipo==2:
    $desconto=10;
    if ($horas<0 && $valorhora<0) {
    echo "Valores inválidos!";
} else {
    $subtotal= $horas * $valorhora;
    $valordesconto= $subtotal * ($desconto/100);
    $total= $subtotal - $valordesconto;
     echo "Nome do cliente: $nome\n Serviço: $servico\n Quantidade de horas: $horas\n Valor\hora: $valorhora\n Subtotal: $subtotal\n Desconto(%$desconto): -$valordesconto\n Valor final: $total";
} break;
 case $tipo==3:
    $desconto=20;
    if ($horas<0 && $valorhora<0) {
    echo "Valores inválidos!";
} else {
    $subtotal= $horas * $valorhora;
    $valordesconto= $subtotal * ($desconto/100);
    $total= $subtotal - $valordesconto;
     echo "Nome do cliente: $nome\n Serviço: $servico\n Quantidade de horas: $horas\n Valor\hora: $valorhora\n Subtotal: $subtotal\n Desconto(%$desconto): -$valordesconto\n Valor final: $total";
} break;
 default:
     echo"Tipo de cliente inválido!";
}} else {
    echo "Valor inválido";
}