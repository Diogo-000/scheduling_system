<?php

require_once 'authentication.php';
require_once 'data_collector.php';
require_once 'main_file.php';

function menu() {
    global $progress, $scheduled_times, $continue;
 while($progress=="Y" || $progress=="YES") {  
    echo "\n
    Hello, thank you for choosing us; which service would you like?
    [1] Schedule an appointment;
    [2] Check available times;
    [0] Exit;\n
    ";
    $option=readline("Type the option for the desired service: ");
    echo "\n";
    switch ($option) {
       case 1:
        echo "Hello, it is important to note that we operate from 7:00 AM to 12:00 PM, reopening at 1:00 PM and closing at 6:00 PM. Thank you again for choosing us!\n";
       while($continue=="Y" || $continue="YES") {
          $continue=readline("If you want to continue scheduling appointments, type Y or
          YES; if not type N or NO: ");
          echo "\n";
          $continue=strtoupper($progress);
          collect_data();
         if ($continue=="YES" || $continue=="Y") {
            collect_data();
            $continue="Y";
         } else if ($continue=="NO" || $continue=="N") {
            echo "Ok, thanks for you preference!\n";
            $continue!="Y";
         } else {
           echo "Option unavailable, please try again!";
         }
       }
       break;
       case 2:
        $amount=count($scheduled_times);
        if ($amount>0){
        echo "These slots are already booked: \n";
        for ($i=0; $i<$amount; $i++) {
           echo "$scheduled_times[$i]  ";
           }
        } 
        else {
        echo "There are no scheduled times";
        }
        break;
        case 0:
        echo "Thank you for coming; see you soon";
       }
    }
}