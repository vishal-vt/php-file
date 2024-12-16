<?php
function defaultpara($age=19,$a=0){
    if($age > 18){
        return "eligible for vote";
    }
    else{
        return "not eligible for vote";
    }
}
echo defaultpara();
?>