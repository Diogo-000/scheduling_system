<?php
$palavras = ["ABACAXI", "ELEFANTE", "PROGRAMAR", "TECLADO", "MONITOR"];
$palavraSecreta = $palavras[rand(0, count($palavras) - 1)];
$length=strlen($palavraSecreta);
$letrasDescobertas=[];
$letrasUsadas=[];
for ($i=0;$i<$length;$i++) {

$letrasDescobertas[$i]="_";

}
$tamanho=count($letrasDescobertas);
$erros=0;
$maxErros=6;
$condicao=true;
while($erros<$maxErros && $condicao==true) {
 
 for($i=0;$i<$length;$i++){
  echo "$letrasDescobertas[$i]";
 }
  echo "\nErro [$erros/$maxErros]\n";
  $resposta=readline("Digite uma letra: ");
  $resposta=strtoupper($resposta);
  $verificar=stripos($palavraSecreta, $resposta);
  $verificar2=in_array($resposta, $letrasUsadas);
  if ($verificar2==false) {
  if ($verificar!==false) {
    for ($i = 0; $i < $length; $i++) {
        if ($palavraSecreta[$i] === $resposta) {
            $letrasDescobertas[$i] = $resposta;
        }
    }$letrasUsadas[] = $resposta;
  } else {
    $erros++;
    $letrasUsadas[]=$resposta;
  }} else {
    echo "Letra já usada!\n";
    $erros++;
  }
$condicao=in_array("_", $letrasDescobertas);
}
if ($condicao==false) {
echo "Meus parabéns!";
} else {
    echo "Que pena, tente de novo";
}