<?php
$i=0;
$numero = readline("Digite um número: ");
if ($numero<0) {
 while ($i>=$numero) {
  echo "Vez: $numero\n";
  $numero++;
}} else {
    while ($i<=$numero) {
  echo "Vez: $numero\n";
  $numero--;
}}
