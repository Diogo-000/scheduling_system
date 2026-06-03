<?php
$nome=readline("Digite seu nome: ");
echo "[1] Fácil - número de 1 a 10, 5 tentativas, +10 pontos por acerto
[2] Médio - número de 1 a 50, 7 tentativas, +20 pontos por acerto
[3] Difícil - número de 1 a 100, 10 tentativas, +50 pontos por acerto\n";
$dificu=readline("Escolha a dificuldade: ");
switch ($dificu) {
  case $dificu==1:
    $range=10;
    $maxtentativas=5;
    $acerto=10;
    $numero=rand(1,$range);
    $ponto=100;
    $inicio=0;
    while ($inicio<=$maxtentativas){
        $inicio++;
        echo "Tentativa: $inicio de $maxtentativas; Pontos: $ponto ";
        $palpite=readline("Digite seu palpite: ");
        if ($numero==$palpite) {
           echo "Parabéns $nome, você acertou, o numero era $numero\n";
           $total=$ponto+$acerto;
           echo "Essa é sua pontuação: $total";
           break;
        } else if ($numero>$palpite) {
            echo "O número é MAIOR do que seu palpite!\n";
        } else if($numero<$palpite) {
            echo "O número é MENOR do que seu palpite!\n";
        }
    }
    break;
  case $dificu==2:
    $range=50;
    $maxtentativas=7;
    $acerto=20;
    $numero=rand(1,$range);
    $ponto=100;
    $inicio=0;
    while ($inicio<=$maxtentativas){
        $inicio++;
        echo "Tentativa: $inicio de $maxtentativas; Pontos: $ponto ";
        $palpite=readline("Digite seu palpite: ");
        if ($numero==$palpite) {
           echo "Parabéns $nome, você acertou, o numero era $numero\n";
           $total=$ponto+$acerto;
           echo "Essa é sua pontuação: $total";
           break;
        } else if ($numero>$palpite) {
            echo "O número é MAIOR do que seu palpite!\n";
        } else if($numero<$palpite) {
            echo "O número é MENOR do que seu palpite!\n";
        }}
    break;
  case $dificu==3:
    $range=100;
    $maxtentativas=10;
    $acerto=50;
    $numero=rand(1,$range);
    $ponto=100;
    $inicio=0;
    while ($inicio<=$maxtentativas){
        $inicio++;
        echo "Tentativa: $inicio de $maxtentativas; Pontos: $ponto ";
        $palpite=readline("Digite seu palpite: ");
        if ($numero==$palpite) {
           echo "Parabéns $nome, você acertou, o numero era $numero\n";
           $total=$ponto+$acerto;
           echo "Essa é sua pontuação: $total";
           break;
        } else if ($numero>$palpite) {
            echo "O número é MAIOR do que seu palpite!\n";
        } else if($numero<$palpite) {
            echo "O número é MENOR do que seu palpite!\n";
        }}
    break;
 default: 
    echo"Dificuldade errada!";
}