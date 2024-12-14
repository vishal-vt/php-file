<?php
function rev($str){
    for( $i=strlen($str)-1 ;$i>=0 ;$i--){   
        $arr[] =$str[$i];
    }

    echo implode("",$arr);
}

rev("ram");

    ?>
