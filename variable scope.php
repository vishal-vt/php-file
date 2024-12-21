<!-- <--------------------------local variable----------------------------->

<?php
function demo(){
    $x = 10;
    $y = 20;
    echo $x,$y;
}
demo();

// <------------------------------global variable---------------------------> 

$a = 10;
$b = 20;
function globalvar(){
    global $a,$b;
    echo $a,$b;
}
globalvar();
echo "this is the global variablen :".$a;
// <------------------------------static variable--------------------------->

function staticVarDemo() {
    static $count = 0;
    $count++;
    echo "Static count: " . $count . "\n";
}

staticVarDemo();
staticVarDemo();
staticVarDemo();
?>