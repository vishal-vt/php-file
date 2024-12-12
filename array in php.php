<?php
$name = ["Vishal", "Rajive", "omprakash"];
$age = ["Vishal" =>24,"Rajive" => 22,"omprakash"=>24];
// print_r($name);
// print_r($age);
foreach($name as $val){
    echo $val."<br>";
}
foreach($age as $key=>$val){
    echo $val."<br>";
}
?>