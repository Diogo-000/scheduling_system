<?php
$nome=readline("Digite seu nome: ");
echo "\tCardápio: \n[1]X-Burguer - R$18,50\n[2]X-Salada - R$20,0\n[3]X-Bacon - R$22,50\n[4]X-Tudo - R$28,0\n";
$escolha=readline("Qual lanche deseja( 1 - 4 )? ");
$quantidade=readline("Quantos lanches deseja? ");
if (is_numeric($quantidade) && $quantidade>0) {
switch ($escolha) {
 case $escolha==1:
  $lanche=18.5;
  $preco=$lanche*$quantidade;
  echo "\t==PEDIDO==\n Cliente: $nome\n Lanche: X-Burguer\n Quantidade: $quantidade\n Preço unitário: R$ $lanche\n Total: R$ $preco";
  break;
 case $escolha==2:
  $lanche=20.0;
  $preco=$lanche*$quantidade;
  echo "\t==PEDIDO==\n Cliente: $nome\n Lanche: X-Salada\n Quantidade: $quantidade\n Preço unitário: R$ $lanche\n Total: R$ $preco";
  break;
 case $escolha==3:
  $lanche=22.50;
  $preco=$lanche*$quantidade;
  echo "\t==PEDIDO==\n Cliente: $nome\n Lanche: X-Bacon\n Quantidade: $quantidade\n Preço unitário: R$ $lanche\n Total: R$ $preco";
  break;
 case $escolha==4:
  $lanche=28.0;
  $preco=$lanche*$quantidade;
  echo "\t==PEDIDO==\n Cliente: $nome\n Lanche: X-Tudo\n Quantidade: $quantidade\n Preço unitário: R$ $lanche\n Total: R$ $preco";
  break;
 default:
  echo "Erro no pedido!";
}} else {
    echo "Erro no pedido!";
}