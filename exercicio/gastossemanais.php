<?php
echo "\t === CONTROLE DE GASTOS SEMANAL === \n";
$total=0;
for ($i=1;$i<9;$i++) {
 switch ($i) {
  case $i==1:
   $dia="Segunda";
   $valordodia1=readline(" Quanto gastou hoje? ");
   $total += $valordodia1;
   if ($valordodia1==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia1>0 && $valordodia1<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia1>50 && $valordodia1<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia1>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==2:
   $dia="Terça";
   $valordodia2=readline(" Quanto gastou hoje? ");
   $total += $valordodia2;
   if ($valordodia2==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia2>0 && $valordodia2<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia2>50 && $valordodia2<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia2>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==3:
   $dia="Quarta";
   $valordodia3=readline(" Quanto gastou hoje? ");
   $total += $valordodia3;
   if ($valordodia3==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia3>0 && $valordodia3<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia3>50 && $valordodia3<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia3>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==4:
   $dia="Quinta";
   $valordodia4=readline(" Quanto gastou hoje? ");
   $total += $valordodia4;
   if ($valordodia4==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia4>0 && $valordodia4<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia4>50 && $valordodia4<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia4>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==5:
   $dia="Sexta";
   $valordodia5=readline(" Quanto gastou hoje? ");
   $total += $valordodia5;
   if ($valordodia5==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia5>0 && $valordodia5<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia5>50 && $valordodia5<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia5>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==6:
   $dia="Sábado";
   $valordodia6=readline(" Quanto gastou hoje? ");
   $total += $valordodia6;
   if ($valordodia6==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia6>0 && $valordodia6<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia6>50 && $valordodia6<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia6>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    } break;
  case $i==7:
   $dia="Domingo";
   $valordodia7=readline(" Quanto gastou hoje? ");
   $total += $valordodia7;
   if ($valordodia7==0) {
    echo " Parabéns! Você não gastou nada!\n";
   } else if ($valordodia7>0 && $valordodia7<51) {
    echo " Gasto baixo!\n";
    } else if ($valordodia7>50 && $valordodia7<151) {
    echo " Gasto moderado!\n";
    } else if ($valordodia7>150) {
    echo " Gasto alto!\n";
    } else {
    echo " Valor incorreto\n";
    }break; 
 } $media=$total/7;
   echo "=== RESUMO DA SEMANA ===\n Total gasto: R$ [$total]\n  Média diária: R$ [$media]\n";
   if ($total<=200) {
    echo" Semana econômica! Ótimo controle!\n";
   } else if ($total>200 && $total<=500) {
    echo " Semana normal. Pode melhorar!\n";
   } else {
    echo " Semana cara! Hora de economizar!\n";
   }
 }