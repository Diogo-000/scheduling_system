<?php
$client_list=[];
$scheduled_times=[];

include 'authentication.php';

echo "\tWelcome to the scheduling service!\n";
echo "Would you like to start?
      If so:
      Type [1],
      If not:
      Type [2]\n";
$start=readline("~~~>");

while ($start==1) {
$name=readline("Insert your name: ");
validated_name();
}