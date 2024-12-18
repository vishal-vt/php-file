<?php
echo "hello world <br>";
echo "hello bauland <br>";
 die("This is last line of your code");
echo "rajiv nahi chaloge <br>" ;
?>

<?php
function dead($para = " "){
   echo $para ."<br>";
   exit;
}
dead("hello");
echo "echo is die"; 
?>