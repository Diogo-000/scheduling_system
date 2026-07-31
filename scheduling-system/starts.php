<?php
function starters() {
 global $start;
 if ($start==1) {
  
} 
 else if ($start==2) {
    echo "Thank you for using our service, see you later!\n";
}
 else {
  $condition=1;
    echo 
     "Option unavailable; want to try again?
      If so:
      Type [1],
      If not:
      Type [2]\n";
 while($condition==1){
   $restart=readline("~> ");
     if ($restart==1) {
        $condition=0;
   } 
     else if ($restart==2) {
        $condition=0;
        echo "Thank you for using our service, see you later!\n";
   } 
     else {
        echo "
      Option unavailable; want to try again?
      If so:
      Type [1],
      If not:
      Type [2]\n";
   }
   }
}
}