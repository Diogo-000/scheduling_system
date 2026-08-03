<?php
$client_list=[];
$scheduled_times=[];

#conditional1 and 2 are variables they enables to looping in verification.
$conditional1=true;
$conditional2=true;

#progress is a variable they enables to looping in menu.
$progress="Y";

$continue="Y";

require_once 'authentication.php';
require_once 'starts.php';
require_once 'data_collector.php';

echo "\tWelcome to the scheduling service!\n";
echo "Would you like to start?
      If so:
      Type [1],
      If not:
      Type [2]\n";
$start=readline("~> ");

starters();