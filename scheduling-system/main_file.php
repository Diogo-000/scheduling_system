<?php
$client_list=[];
$scheduled_times=[];
$continue=1;
$conditional1=true;
$conditional2=true;

include 'authentication.php';
include 'starts.php';

echo "\tWelcome to the scheduling service!\n";
echo "Would you like to start?
      If so:
      Type [1],
      If not:
      Type [2]\n";
$start=readline("~> ");

starters();