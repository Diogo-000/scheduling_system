<?php
 $produtos = ["Café", "Pão", "Leite", "Queijo", "Manteiga", "Presunto", "Suco", "Biscoito"];
 $precos   = [14.90,   7.50,  5.80,   22.00,    9.40,       18.75,     8.90,   6.50];
 $estoque  = [10,      25,    15,     8,        12,          6,         20,     18];
 $carrinhoProdutos  = [];
 $carrinhoQtd       = [];
 $carrinhoPrecos    = [];
 $total=0;
 $true=true;
function desconto ($total=0) {
    if ($total>=100) {
                $desconto=10;
                $descontoPOrcent=0.1;
                echo "Desconto de $desconto%";
                $totalComDesconto=$total-($descontoPOrcent*$total);
                echo "Total com desconto: $totalComDesconto";
            } else if ($total>=50 && $total<100) {
                $desconto=5;
                $descontoPOrcent=0.05;
                echo "Desconto de $desconto%";
                $totalComDesconto=$total-($descontoPOrcent*$total);
                echo "Total com desconto: $totalComDesconto";
            } else {
                echo "Sem desconto";
            }
 }
 function diminuir ($indice=0, $estoque=[], $carrinhoQtd=[]) {
    $numero=readline("Digite o numero do item que você deseja retirar do carrinho: ");
    $estoque[$indice]=$estoque[$indice]+$carrinhoQtd[$indice];
    unset($carrinhoPrecos[$numero]);
    unset($carrinhoProdutos[$numero]);
    unset($carrinhoQtd[$numero]);
    array_values($carrinhoPrecos);
    array_values($carrinhoProdutos);
    array_values($carrinhoQtd);
    echo "$carrinhoProdutos[$numero] foi retirado do carrinho";
 } 
do {
    echo"\t[1] Ver catalógo\n\t[2] Adicionar  ao carrinho\n\t[3] Ver carrinho\n\t[4] Remover do carrinho\n\t[5] Finalizar compra\n\t[0] Fechar o caixa\n";
    $escolha=readline("Digite o que deseja fazer: ");
    switch ($escolha) {
    case 1:
      for ($i=0;$i<8;$i++) {
        if ($estoque[$i]==0) {
            echo"\n|[$i]. $produtos[$i] | R$ $precos[$i] | EStoque: ESGOTADO|\n";
        } else {
            echo"\n|[$i]. $produtos[$i] | R$ $precos[$i] | EStoque: $estoque[$i]|\n";
        }
      }
      break;
    case 2:
     $numero=readline("Digite o número do item na lista de produtos: ");
     if ($numero>7) {
       echo"Número inválido!";
     } else {
       $quantidade=readline("Qual a quantidade de produtos que deseja? ");
       if ($estoque[$numero]==0) {
        echo "Produto Esgotado!";
       } else if ($quantidade>$estoque[$numero]) {
        echo "Estoque insuficiente| Em estoque: [$estoque[$numero]]";
     } else {
        $verdade=in_array($produtos[$numero],$carrinhoProdutos);
        if ($verdade==true) {
            $carrinhoQtd[$numero-1]=$carrinhoQtd[$numero-1]+$quantidade;
        } else {
            $carrinhoProdutos[]=$produtos[$numero];
            $carrinhoPrecos[]=$precos[$numero];
            $carrinhoQtd[]=$quantidade;
            $subTotal=$precos[$numero]*$quantidade;
            $estoque[$numero]=$estoque[$numero]-$quantidade;
            echo "$produtos[$numero] x $quantidade adicionado! Esse é o preço $subTotal\n";
        }
     }
     }
      break;
    case 3:
        $vazio=count($carrinhoProdutos);
        if ($vazio==0) {
         echo "Carrinho vazrio";
        } else {
          for ($i=0;$i<$vazio;$i++) {
           $subTotal=$carrinhoPrecos[$i]*$carrinhoQtd[$i];
           echo "$i. $carrinhoProdutos[$i] x $carrinhoQtd[$i] = R$ $subTotal \n";
          }
        }
        break;
    case 4:
        $vazio=count($carrinhoProdutos);
        if ($vazio==0) {
         echo "Carrinho vazrio";
        }else {
        for ($i=0;$i<$vazio;$i++) {
           $subTotal=$carrinhoPrecos[$i]*$carrinhoQtd[$i];
           echo "$i. $carrinhoProdutos[$i] x $carrinhoQtd[$i] = R$ $subTotal \n";
        }}
        $numero=readline("Digite o numero do item que você deseja retirar do carrinho: ");
        if ($carrinhoProdutos[$numero]=="Café") {
        diminuir(0, $estoque, $carrinhoQtd);
        } else if ($carrinhoProdutos[$numero]=="Pão") {
        diminuir(1, $estoque, $carrinhoQtd);
        echo "$carrinhoProdutos[$numero] foi retirado do carrinho";
        } else if ($carrinhoProdutos[$numero]=="Leite") {
        diminuir(2, $estoque, $carrinhoQtd);
        } else if ($carrinhoProdutos[$numero]=="Queijo") {
        diminuir(3, $estoque, $carrinhoQtd);
        } else if ($carrinhoProdutos[$numero]=="Manteiga") {
        diminuir(4, $estoque, $carrinhoQtd);
        } else if ($carrinhoProdutos[$numero]=="Presunto") {
        diminuir(5, $estoque, $carrinhoQtd);
        } else if ($carrinhoProdutos[$numero]=="Suco") {
        diminuir(6, $estoque, $carrinhoQtd);
        } else {
        diminuir(7, $estoque, $carrinhoQtd);
        }
        break;
    case 5:
        $vazio=count($carrinhoProdutos);
        if ($vazio==0) {
         echo "Carrinho vazrio";
        } else {
            echo "====================\n    NOTA FISCAL\n====================\n";
            for ($i=0;$i<$vazio;$i++) {
            $subTotal=$carrinhoPrecos[$i]*$carrinhoQtd[$i];
            echo "$i. $carrinhoProdutos[$i] x $carrinhoQtd[$i] = R$ $subTotal \n";
            $total+=$subTotal;
            }
            echo "Itens: $vazio\nTotal: $total\n";
            desconto ($total);
            $carrinhoPrecos=[];
            $carrinhoProdutos= [];
            $carrinhoQtd= [];
            echo "\nCompra finlizada com sucesso!\n";
            }
        break;
    case 0:
        echo "Caixa fechado até logo";
        $true=false;
        break;
    default:
       echo "Opção inválida\n";
       break;
}} while($true==true);