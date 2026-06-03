<?php
$produto=readline("Digite qual você produto deseja: ");
$valorinicial=readline("Digite o valor do produto: ");
$parcela=readline("Digite quantas vezes deseja parcelar(MIN:1; MAX:12): ");
if (!is_numeric($valorinicial || $parcela)) {
 echo "O valor inicial está incorreto!";
} else if ($parcela>0 && $parcela<12) {
 switch ($parcela) {
   case $parcela>=1 && $parcela<=3:
    $juro=0;
    $vlrcmjuros=$valorinicial*($juro/100);
    $vlrtotal=$valorinicial+$vlrcmjuros;
    $vlrparcela=$vlrtotal/$parcela;
    echo "Valor total: $vlrtotal\n";
    echo "Valor de cada parcela: $vlrparcela";
    break;
   case $parcela>=4 && $parcela<=6:
    $juro=5;
    $vlrcmjuros=$valorinicial*($juro/100);
    $vlrtotal=$valorinicial+$vlrcmjuros;
    $vlrparcela=$vlrtotal/$parcela;
    echo "Valor total: $vlrtotal\n";
    echo "Valor de cada parcela: $vlrparcela";
    break;
   case $parcela>=7 && $parcela<=9:
    $juro=10;
    $vlrcmjuros=$valorinicial*($juro/100);
    $vlrtotal=$valorinicial+$vlrcmjuros;
    $vlrparcela=$vlrtotal/$parcela;
    echo "Valor total: $vlrtotal\n";
    echo "Valor de cada parcela: $vlrparcela";
    break;
   case $parcela>=10 && $parcela<=12:
    $juro=15;
    $vlrcmjuros=$valorinicial*($juro/100);
    $vlrtotal=$valorinicial+$vlrcmjuros;
    $vlrparcela=$vlrtotal/$parcela;
    echo "Valor total: $vlrtotal\n";
    echo "Valor de cada parcela: $vlrparcela";
    break;
   default:
    echo "Erro, informação inválida!";
 }
} else {
  echo "Erro, informação inválida!";
}
