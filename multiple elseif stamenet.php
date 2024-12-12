<?php
$var = 200;
if($var == "100" && $var === 100){
    echo "equal";
}

elseif(!$var) {
echo "againequal";// bss value rahega to ye condition ke bagair kam krega;
}

elseif($var >10 || $var<120){
    echo"hello";
}

else {
    echo "aa gye bhaiyva";
}
?>