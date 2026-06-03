<?php
$temperatura=readline("Qual a temperatura?\n");
$oxigenio=readline("Qual a oxigenação?\n");
$frequencia=readline("Qual a frequência cardíaca?\n");
if (!is_numeric($temperatura or $oxigenio or $frequencia)) {
        echo "Os dados não combinam com os paremetros indicados!";
      } else if ($temperatura>39) {
        echo "Estado grave!";
      } else if ($oxigenio<90) {
        echo "Estado grave!";
      } else if ($frequencia>140) {
        echo "Estado grave!";
      } else {
        echo "Paciente estável!";
      }