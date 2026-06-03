<?php
$numero1=readline("Digite o primeiro número: ");
$sinal=readline("Sínal da equação: ");
$numero2=readline("Digite o segundo número: ");
if (is_numeric($numero1 and $numero2)) {
        echo "Os dados não combinam com os paremetros indicados!";
 if ($numero2==0 && $sinal=="/") {
    echo "Não é possivel dividir um numero por 0!";
}
  else if ($sinal=="+" ) {
    $numero3=($numero1)+($numero2);
    echo $numero3;
} else if ($sinal=="x" ) {
    echo $numero1*$numero2;
} else if ($sinal=="-" ) {
    echo $numero1-$numero2;
} else if ($sinal=="/" ) {
     echo  $numero1/$numero2 ;
}
}