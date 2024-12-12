<?php
$age = 17;
switch($age){
    case $age >= 18:
    echo"eligible for vote";
    break;
    case $age <18:
    echo "Not eligible for vote";
    break;
    default:
    echo "value not found here";
}

