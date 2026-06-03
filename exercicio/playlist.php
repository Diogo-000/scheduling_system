<?php
$nome=readline("Digite o nome da playlist: ");
$quantidade=readline("Digite quantas músicas a playlist terá: ");
$tempo2=0;
if ($quantidade<1 || $quantidade>10) {
    echo "Erro, playlist só pode ter entre 1 a 10 músicas";
} else {
    for ($i=0;$i<$quantidade;$i++) {
        echo "Música [$i/$quantidade] ";
        $musica=readline("Digite o nome da música: ");
        $tempo=readline("Digite o tempo da música [MIN]: ");
        echo "\tGêneros de Música: \n [1] Pop\n [2] Rock\n [3] Sertanejo\n [4] Rap\n [5] Outro\n";
        $genero=readline("Digite o gênero da música: ");
        switch ($genero) {
         case $genero==1:
            $genero= "Pop";
            break;
         case $genero==2:
            $genero= "Rock";
            break;
         case $genero==3:
            $genero= "Sertanejo";
            break;
         case $genero==4:
            $genero= "Rap";
            break;
         case $genero==5;
            $genero= "Outro";
            break;
         default:
            echo "ERROR";
        }
        if ($tempo<=2) {
            $classe="Música curta!\n";
        } else if ($tempo>=3 && $tempo<=4) {
            $classe="Duração padrão!\n";
        } else {
            $classe="Música longa!\n";
        }
        $tempo2+=$tempo;
        echo "Música: $musica ;Gênero: $genero ;Duração: $tempo min; $classe";

    } echo "\t==PLAYLIST $nome==\nQuantidade de músicas na playlist: $quantidade\nTempo total: $tempo2";
    $trajeto=readline("Digite o tempod o trajeto [MIN] : ");
    if ($tempo2<$trajeto) {
        $diferenca=$trajeto-$tempo2;
        echo "O trajeto é muito grande, faltam $diferenca min, adicione mais músicas!";
    } else if ($tempo2==$trajeto) {
        echo "O tempo da playlist está perfeito, aproveite!";
    } else {
        $diferenca=$tempo2-$trajeto;
        echo "O tempo da playlist é muito grande, sobram $diferenca min, retire músicas!";
    }
}