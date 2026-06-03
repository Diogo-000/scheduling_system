<?php
$senha="php123";
$maxtentativas=6;
for ($i=0;$i<$maxtentativas;$i++) {
 echo " Tentativa número [$i/5]\n";
 $senha1=readline(" Digite a senha: ");
 if ($senha1==$senha) {
   echo " Senha correta!";
   break;
 } else if ($i>=0 && $i<3 && $senha1!=$senha){
    echo " Senha incorreta, tente novamente!\n Dica: A senha tem 6 dígitos\n";
 } else if ($i>=3 && $i<5 && $senha1!=$senha){
    echo " Senha incorreta, tente novamente!\n Dica: A senha começa com 'php'\n";
 } else if ($i=5 && $senha1!=$senha) {
    echo "Acabaram as chances!";
    break;
 } 
 }
