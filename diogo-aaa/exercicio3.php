<?php
$opcoes = ["PHP", "JavaScript", "Python", "Java"];
$votos = [0, 0, 0, 0];
$votantes=readline("Digite a quantidade de votantes: ");
echo "\t[1]. PHP\n\t[2]. JavaScript\n\t[3]. Python\n\t[4]. Java\n";
for ($i=1; $i<=$votantes;$i++) {
   $voto=readline("Digite o numero da linguagem que quer votar: ")-1;
    if ($voto>4 || $voto<0) {
        echo "Não existe essa opção\n";}
    else {
        $votos[$voto]++;}}
$percentPorPessoa=100/$votantes;
$length=count($opcoes);
$barrinha="█";
for ($i=0;$i<$length;$i++) {
    $barras=str_repeat("$barrinha" , $votos[$i]);
    $porcentagemTotal=$percentPorPessoa*$votos[$i];
    $porcentagemTotal=round($porcentagemTotal);
    echo"[$opcoes[$i]]: [$votos[$i]] voto(s) | $barras $$porcentagemTotal% \n";
}
$maximo=max($votos);
if ($votos[0]==$maximo && $votos[1]==$maximo && $votos[2]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[0], $opcoes[1], $opcoes[2] e $opcoes[3]";} 
else if ($votos[0]==$maximo && $votos[1]==$maximo && $votos[2]==$maximo) {echo "Empate entre $opcoes[0], $opcoes[1] e $opcoes[2]";} 
else if ($votos[0]==$maximo && $votos[1]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[0], $opcoes[1] e $opcoes[3]";}
else if ($votos[1]==$maximo && $votos[2]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[1], $opcoes[2] e $opcoes[3]";}
else if ($votos[0]==$maximo && $votos[2]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[0], $opcoes[2] e $opcoes[3]";}
else if ($votos[0]==$maximo && $votos[1]==$maximo) {echo "Empate entre $opcoes[0] e $opcoes[1]";}
else if ($votos[0]==$maximo && $votos[2]==$maximo) {echo "Empate entre $opcoes[0] e $opcoes[2]";}
else if ($votos[0]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[0] e $opcoes[3]";}
else if ($votos[1]==$maximo && $votos[2]==$maximo) {echo "Empate entre $opcoes[1] e $opcoes[2]";}
else if ($votos[1]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[1] e $opcoes[3]";}
else if ($votos[2]==$maximo && $votos[3]==$maximo) {echo "Empate entre $opcoes[2] e $opcoes[3]";}
else if ($votos[0]==$maximo) {echo "Linguagem vencedora: $opcoes[0]";}
else if ($votos[1]==$maximo) {echo "Linguagem vencedora: $opcoes[1]";}
else if ($votos[2]==$maximo) {echo "Linguagem vencedora: $opcoes[2]";}
else if ($votos[3]==$maximo) {echo "Linguagem vencedora: $opcoes[3]";}