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
// $arr = [12, 13, 14, 45, 46, 68, 90, 978, 76];
// array_shift($arr);
// print_r($arr);

// <--------------------------------array merge ------------------------->

// array_merge(array1,array2):- it merge two or morearray and  create a new array 
// $a = [8,9,10,11,12,13];
// $b = [1,2,3,4,6,7];
// $c = array_merge($a,$b);
// print_r($c);

// <-------------------------------- compact()----------------------------> 

// compact(key ,key2 ,key3) :- it is connvert in array all variable 
// $a = 1;
// $b = 4;
// $c = "vishal";
// print_r(compact('a','b','c'));

// <----------------------------------sort array--------------------------------->

//this is provide  always ascending order or shorted array .
// $arr = ["aram","ashyam","aghanshyam","alok"];
// sort($arr);
// print_r($arr);

// <------------------------------------------reverse sort array-------------------------------> 

// $arr = [1,2,3,4,5,6,7,8,9];
// rsort($arr);
// print_r($arr); 


// <------------------------------------range method---------------------------------------> 

// It is create a array in siquence type.
// print_r (range('a','z'));

// <----------------------------------array combine-------------------------------> 

// array_combine(array(key),array(value)); 
// $key = range('a','f');
// $value = range(1,6);
// $arr = array_combine($key,$value);
// print_r($arr);

// <------------------------------- search array--------------------------> 

// array search return krta hai . yah jo serach krna cahte hai vo daliye aur kon sa variable me hai vo daliye uska index pta chal jayega mtlb position batata hai.
$animal = ["cow","buffalo","goat","dog","deer"];
print_r(array_search("dog",$animal));
?>