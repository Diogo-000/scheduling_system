<?php
function existing_in_array() {
    global $name, $client_list;
    if (in_array($name, $client_list)==true) {
        echo "Appointment already scheduled!";
    } 
    else {
        $client_list[]=$name;
    }
}
function validated_name() {
    global $name;
    if (!is_string($name)==false) {
        echo "Invalid name, please, try again";
    }
    else {
        existing_in_array();
    }
}
function validated_hour() {
    global $hour, $scheduled_times;
    if (in_array($hour, $scheduled_times)==false) {
        $scheduled_times[]=$hour;
    } else {
        echo "Time slot already taken, please, try again in other hour";
    }
}