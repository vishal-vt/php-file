<?php
//<-----------------------array push--------------------->

//array_push(array,new element):-It used for add new element in existig array in last parameter.

// $arr = [1,2, 3,4,5,6,7];
//  array_push($arr,8);    //single parameter dikhane ke liye ;
// array_push($arr,[11 ,12, 13,14,15]);
// echo "<pre>"; 
// print_r($arr);

// <----------------------array pop-------------------------->

//array_pop(array):-- it remove last  parameter of array.

// $arr =[12,3,45,6,7,34,5,89];
// array_pop($arr);
// print_r($arr);

// <-----------------------array unshift--------------------------> 

// array_unshift(array,new element):- it is insert element begninnig menas strating of array.

// $arr = [1,2, 3,4,5,6,7];
//  array_unshift($arr,8);    //single parameter dikhane ke liye ;
// array_unshift($arr,[11 ,12, 13,14,15]);
// echo "<pre>"; 
// print_r($arr);

// <----------------------------array shift-------------------------> 

// array_shift (array):- it remove first element of array./
$arr = [12,13,14,45,46,68,90,978,76];
array_shift($arr);
print_r($arr);


?>