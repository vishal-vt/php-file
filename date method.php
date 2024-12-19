<?php
echo "curent year is = ".date ("Y")."<br>";
echo "curent year is = ".date ("y")."<br>";
echo "curent month is = ".date ("M")."<br>";
echo "curent month is = ".date ("m")."<br>";
echo "curent day name is = ".date ("D")."<br>";
echo "curent day is = ".date ("d")."<br>";
echo "curent hours is = ".date ("h")."<br>";
echo "curent minute is = ".date ("i")."<br>";
echo "curent second is = ".date ("s")."<br>";
echo "curent am or pm is = ".date ("a")."<br>";
echo "curent am or pm is = ".date ("A")."<br>";
echo date_default_timezone_get()."<br>";

// set indian time for by default in php code 


date_default_timezone_set("Asia/Kolkata");
echo "curent hours is = ".date ("h")."<br>";
echo "curent minute is = ".date ("i")."<br>";
echo "curent second is = ".date ("s")."<br>";
echo date_default_timezone_get()."<br>";

// all in one line date and time;

echo date("d/M/Y/ | h:i:s:a")."<br>";

// mk time code start

$a = mktime(10,43,21,4,5,2024);
echo date("d/M/Y/h:i:s a",$a)."<br>";

// str to date convert method
$date = strtotime("10/10/2006");
echo date("d/M/Y",$date);
?>
