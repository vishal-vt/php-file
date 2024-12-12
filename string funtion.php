<?php
// $str = "    hi this is ram ji  ";
// echo strlen($str);
// $str1=trim($str);
// echo $str1;
// echo strlen($str1);


// //str_repeat(string,time): it repeat string given time and return repeated string.
// echo str_repeat('hey',10);
// for ($i=0;$i<=10;$i++)
// {
//     echo "hey";
// }

// //str_replace (replaced string , replace string , string): it replace old string to new string and return new string .
// $string = "hello world";
// echo str_replace("hello world","Jay Shree Ram","hello world");//we also use variable echo str_replace("hello world","Jay Shree Ram",$string)


// explode(seprator,string) :-it convert into array formate by delimeter and it return array;
// $str = "it is explode function for string to array conversion";
// // print_r(explode("s",$str));
// $arr =explode(" ",$str);
// echo $arr[1];


// $str = ["it","is","implode","function","for","array","to","string","converstion"];
// echo implode(" ",$str);
// 


// $var = "Om Prakash";
// // print_r(str_split($var));
// for($i=0; $i<strlen($var);$i++){
//     $arr[] = $var[$i];
// }
// print_r($arr);




// //str_word_count(string):-it return word count of given string.
// echo str_word_count("hello world,hey?oh.oho");


$str ="hello world";
for( $i=strlen($str)-1 ;$i>=0 ;$i--){   
    $arr[] =$str[$i];
}
echo implode("",$arr);
?>
