<?php
$max=readline("Digite quantas tabúadas deseja: ");
for ($i=1;$i<=$max;$i++) {
 for ($j=1;$j<=$max;$j++) {
    $result=$i*$j;
    echo "$i vezes $j: ";
    echo "$result\n";
 }
}