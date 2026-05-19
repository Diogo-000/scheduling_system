<?php
$idade=readline("Insira sua idade: ");
$peso=readline("Insira seu peso: ");
$altura=readline("Insira sua altura: ");
      if ($idade>=18 && $altura>=1.7 && $peso>=60) {
    echo "Aprovado para o treinamento!";} 
      else if ($idade<18) {
        echo "Reprovado pela idade!";} 
      else if ($altura<1.7) {
        echo "Reprovado pela altura!";}
      else if ($peso<60) {
        echo "Reprovado pelo peso!";}
      else if (!is_numeric($idade or $peso or $altura)) {
        echo "Os dados não combinam com os paremetros indicados!";
      }