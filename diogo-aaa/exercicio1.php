<?php
$lista= [];
$true=true;
$itemOUsair=" ";
while($true==true) {
 $itemOUsair=readline("Digite um item (ou sair): ");
 if ($itemOUsair=="sair") {
 $true=false;
 echo "\t[1] Ver lista completa\n\t[2] Buscar item\n\t[3] Remover item\n\t[4] Contar itens\n";
 $acao=readline("O que deseja fazer? ");
 switch($acao) {
    case 1:
        print_r ($lista);
        break;
    case 2:
        $item=readline("Digite o item que deseja procurar: ");   
        $verdade=in_array($item, $lista);
        if($verdade==true) {
        echo"O item $item, está na sua lista!\n";
        } else{
        echo "O item $item, não está na sua lista!\n";}
        break;
    case 3:
        $item=readline("Digite o índice do item que deseja retirar: ");  
        $verdade=count($lista);
        if ($item<$verdade && $item>-1) {
         unset ($lista[$item]);
         array_values($lista);
        } else {
            echo "O índice é incorreto";
        }
        break;
    case 4:
        $length=count($lista);
        echo "Você tem [$length] na lista\n";
        break;
    default:
        echo "Opção inválida";
        break;
 }$length=count($lista);
  for ($i=0;$i<$length;$i++) {
    echo"[$i] $lista[$i]";
  }
 } else {
 echo "Item adicionado!\n";
 $lista[]=$itemOUsair;
 }
}