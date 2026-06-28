<?php
$produtos   =  ["Caneta", "Caderno", "Borracha", "Lápis", "Mochila"];
$precos     =  [2.50,       15.00,     1.50,       1.00,    89.90];
$quantidades = [100,        50,        200,        150,     20];

$true=true;

$totalValor=0;

$maiorPreco=$precos[0];
$maisCaro=$produtos[0];
$maisQtd=$quantidades[0];
$maisEmEstoque=$produtos[0];

while ($true) {
    echo "\t[1]. Listar estoque\n\t[2]. Vender item\n\t[3]. Repor estoque\n\t[4]. Relatório\n\t[0]. Sair\n";
    $resposta=readline("Digite a opção que deseja: ");
    switch ($resposta) {
        case 1:
            $length=count($produtos);
            for ($i=0;$i<$length;$i++) {
                $precoTotal=$precos[$i]*$quantidades[$i];
                echo "[$i]. $produtos[$i] | Preço: R$ $precos[$i] | Qtd: $quantidades[$i] | Total: R$ $precoTotal\n";
            }
            break;
        case 2:
            $QualItem=readline("Digite o ID do item que quer vender: ");
            $QuantosItens=readline("Digite a quantidade que deseja: ");
            if ($QuantosItens>$quantidades[$QualItem]) {
                echo "Quantidade acima do estoque | Estoque: [$quantidades[$QualItem]]";
            } else {
                $precoTotal=$precos[$QualItem]*$QuantosItens;
                echo "Venda realizada! $produtos[$QualItem] ; $QuantosItens x pelo valor de R$ $precoTotal";
                $quantidades[$QualItem]=$quantidades[$QualItem]-$QuantosItens;
            }
            break;
        case 3:
            $QualItem=readline("Digite o ID do item que quer repor: ");
            $QuantosItens=readline("Digite a quantidade que vai adicionar: ");
            $quantidades[$QualItem]=$quantidades[$QualItem]+$QuantosItens;
            break;
        case 4: 
            $length=count($produtos);
            for ($i=0;$i<$length;$i++) {
                $precoTotal=$precos[$i]*$quantidades[$i];
                echo"Total em $produtos[$i]: R$ $precoTotal\n";
                $totalValor+=$precoTotal;
                if($precos[$i]>$maiorPreco) {
                    $maiorPreco=$precos[$i];
                    $maisCaro=$produtos[$i];
                }
                if ($quantidades[$i]>$maisQtd) {
                    $maisQtd=$quantidades[$i];
                    $maisEmEstoque=$produtos[$i];
                }
            }
            echo "Valor Total: R$ $totalValor\n";
            echo "O produto mais caro: $maisCaro | Custando: $maiorPreco\n";
            echo "O produto com mais unidades no estoque: $maisEmEstoque | Com $maisQtd unidades\n";
            break;
        case 0:
            $true=false;
            $length=count($produtos);
            echo "\tListagem Final: \n";
            for ($i=0;$i<$length;$i++) {
                $precoTotal=$precos[$i]*$quantidades[$i];
                echo "[$i]. $produtos[$i] | Preço: R$ $precos[$i] | Qtd: $quantidades[$i] | Total: R$ $precoTotal\n";
            }
            break;
        default:
            echo "Opcão inválida!";
            break;
    }}