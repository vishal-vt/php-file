<?php
//<---------------lc first---------------------->
// $str = "HELLO WORLD";
//  //lc first(string):-it convert first letter in lowercase; -->
// echo lcfirst($str);

//<--------------------uc first--------------------->

//  //Uc first(string):-it convert first letter in uppercase; -->
// echo ucfirst($str);

//<-------------------------uc words--------------------->


// ucwords(string):- it convert lower to case first letter of each word of string
// $str = "hello world";
// echo ucwords($str);

//<-----------------------str to upper----------------------------->


//strtoupper(string):-it conver complete string lower to uppercase
// $str = " jay shree ram";
// echo strtoupper($str);

//<-----------------------str to lower-------------------------->


//strtolower(string):-it conver complete string upper to lowercase

// $str = " JAY SHREE RAM";
// echo strtolower($str);

//<------------------------------------------------------------------------------------->

//  php.net yah ek php ka website hai jahah se app content ko pasdh sakte hai .

//<-----------------------chop------------------------->

//chop jis word ko difine kroge use right side se remove krega left side content me work nahi krta hai.

// $str ="JAY SHREE RAM";
// echo chop($str,"RAM");


//<---------------------------------substr------------------------>

// yah slice krta hai mtlb hata deta hai jaise hum jis world se jis world tak dikhsan chahte hai use  lenge to vah bss utna hi dikhayega

// $str = "hello world";
// echo substr($str,3,7);

// <-----------------------------strposition------------------------->


// hamara string kaha se position kaha hai ise substr ke jariye jan skte hai.

// $str = "rahav ram";
// echo strpos($str,"ram");

//<------------------------------str campision----------------------------->


// yah difference batata hai same hai to 0 return jrega varna 1 return krTa hai .

// $str = "Hello WORLD";
// $str1 ="Hello WORLD";
// echo strcmp($str,$str1);


?>