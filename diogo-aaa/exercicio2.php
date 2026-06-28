<?php
$quantidade=readline("Digite a quantidade de alunos da turma: ");
$nomes= [];
$notas= [];
$soma=0;
for ($i=0;$i<$quantidade;$i++) {
 $PedidoNome=readline("Digite o nome do aluno: ");
 $PedidoNota=readline("Digite a nota do aluno: ");
 if ($PedidoNota>10 || $PedidoNota<0) {
    echo "Nota inválida";
 } else {
    $nomes[]=$PedidoNome;
    $notas[]=$PedidoNota;
 }
}
 $maior=max($notas);
 $menor=min($notas);
 $variavel=count($notas);
 echo"=========================BOLETIM=========================\n";
for ($i=0;$i<$variavel;$i++) {
 if ($notas[$i]>=7 && $notas[$i]<=10) {
 $situacao="Aprovado";
 echo"[$i].  $nomes[$i]: $notas[$i] - $situacao\n";}
 else if ($notas[$i]>=5 && $notas<7) {
 $situacao="Em recuperação";
 echo"[$i].  $nomes[$i]: $notas[$i] - $situacao\n";}
 else if ($notas[$i]<5) {
 $situacao="Reprovado";
 echo"[$i].  $nomes[$i]: $notas[$i] - $situacao\n";}
 $soma+=$notas[$i];
 }
$media=$soma/(count($notas));
$maior=max($notas);
$menor=min($notas);
echo "Media da turma: $media\nMaior nota: $maior\nMenor nota: $menor\n";
switch($quantidade) {
 case $media>=8:
    $desempenho="excelente";
    echo "O desempenho foi $desempenho ";
    break;
 case $media>=6 && $media<8:
    $desempenho="bom";
    echo "O desempenho foi $desempenho ";
    break;
 case $media>=4 && $media<6:
    $desempenho="mediano";
    echo "O desempenho foi $desempenho ";
    break;
 case $media<4:
    echo "Turma precisando melhorar";
    break;
}
