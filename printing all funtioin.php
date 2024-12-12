<?php
$a = "hello";
$b = printf($a); // printf do print but give some return also
echo $b;// prinrt karega but kuch bhib return nahi krega aur ye array par workk naho  karega 

sprintf($a);// nothing print beacause this is only return value
echo sprintf($a);

print $a;// print karega bus ye array ko print nahi karta hai
echo  "<pre>";
$arr = [1,2,3,4,4,5,6,7,8];
print_r($arr);
echo "</pre>";
?>