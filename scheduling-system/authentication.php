<?php
function existing_in_array() {
    global $name, $client_list, $conditional1;
    if (in_array($name, $client_list)) {
        echo "Appointment already scheduled!";
    } 
    else {
        $client_list[]=$name;
        $conditional1=false;
    }
}
function validated_name() {
    global $name;
    if (empty($name) ||
        is_numeric($name) ||
        !preg_match("/^[a-zA-ZÀ-ÿ ]+$/u", $name)) 
        {
        echo "Invalid name, please, try again";
    }
    else {
        existing_in_array();
    }
}
function validated_hour() {
    global $hour, $scheduled_times, $conditional2;
    if (in_array($hour, $scheduled_times)==false
        && is_numeric($hour)
        && $hour<25 
        && $hour>0) {
        $scheduled_times[]=$hour;
        $conditional2=false;
    } else {
        echo "Time slot already taken, please, try again in other hour";
    }
}