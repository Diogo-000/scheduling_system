<?php
$nome=readline("Digite o nome do aluno: ");
echo " [1] Treino A - Peito (3 exercícios, 4 séries cada)\n [2] Treino B - Costas (3 exercícios, 3 séries cada)\n [3] Treino C - Pernas (3 exercícios, 5 séries cada)\n";
$opcao=readline("Qual treino irá fazer? ");
switch ($opcao) {
    case $opcao==1:
        $treino="Peito";
        $series=4;
        $exercicios=3;
        $ex1="Supino Reto";
        $ex2="Crucifixo";
        $ex3="Flexão";
        $peso=readline("Digite o peso que será usado [KG]: ");
        if ($peso<=20) {
            echo "Carga leve, recomendo focar em execução!\n";
        } else if ($peso>20 && $peso<50) {
            echo "Carga moderada, bom trabalho!\n";
        } else if ($peso>50) {
            echo "Carga alta, cuidado com a execução!\n";
        }
        for ($i=1;$i<=$series;$i++) {
         echo "$ex1 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex2 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex3 ; Series: [$i/$series] ; $peso kg\n";
        }
        $volume=3*$series*$peso*12;
        echo "Volume total do treino: $volume kg";
        break;
    case $opcao==2:
        $treino="Costas";
        $series=3;
        $exercicios=3;
        $ex1="Puxada Frontal";
        $ex2="Remada Curvada";
        $ex3="Pulldown";
        $peso=readline("Digite o peso que será usado [KG]: ");
        if ($peso<=20) {
            echo "Carga leve, recomendo focar em execução!\n";
        } else if ($peso>20 && $peso<50) {
            echo "Carga moderada, bom trabalho!\n";
        } else if ($peso>50) {
            echo "Carga alta, cuidado com a execução!\n";
        }
        for ($i=1;$i<=$series;$i++) {
         echo "$ex1 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex2 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex3 ; Series: [$i/$series] ; $peso kg\n";
        }
        $volume=3*$series*$peso*12;
        echo "Volume total do treino: $volume kg";
        break;
    case $opcao==3:
        $treino="Perna";
        $series=5;
        $exercicios=3;
        $ex1="Agachamento";
        $ex2="Leg Press";
        $ex3="Cadeira Extensora";
        $peso=readline("Digite o peso que será usado [KG]: ");
        if ($peso<=20) {
            echo "Carga leve, recomendo focar em execução!\n";
        } else if ($peso>20 && $peso<50) {
            echo "Carga moderada, bom trabalho!\n";
        } else if ($peso>50) {
            echo "Carga alta, cuidado com a execução!\n";
        }
        for ($i=1;$i<=$series;$i++) {
         echo "$ex1 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex2 ; Series: [$i/$series] ; $peso kg\n";
         echo "$ex3 ; Series: [$i/$series] ; $peso kg\n";
        }
        $volume=3*$series*$peso*12;
        echo "Volume total do treino: $volume kg";
        break;
}