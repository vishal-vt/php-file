<?php
// $add = function(){
//     return 10 +18;
// };
// echo $add();
?>

<?php
// $add = function($a,$b){
//     return $a + $b;
// };
// echo $add(20,40);
?>

<?php
$fac = function ($num){
    $fact = 1;
    for($i=1;$i<=$num;$i++){
    $fact=$fact*$i;
    }
    return $fact;
};
 echo $fac(5);