<?php
require_once 'authentication.php';
function collect_data() {
    global $client_list, $conditional1, $conditional2;
    while ($conditional1==true) {
    $name=readline("Enter your name: ");
    validated_name();
    }
    echo "Registered name";
    while($conditional2==true) {
    $hour=readline("Enter the time you wish to schedule: ");
    validated_hour();
    }
    echo "Congratulations, the appointment has been successfully scheduled!";
    
}