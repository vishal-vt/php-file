<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
            header('Location:mobile-num-validation.php?nameerror=Name field is required');
        }
        elseif(empty($_POST['email'])){
            header('Location:mobile-num-validation.php?emailerror=email field is required'); 
        }
        elseif(empty($_POST['mobile'])){
            header('Location:mobile-num-validation.php?mobileerror=mobile field is required'); 
        }else{
            echo "my name is ".$_POST['name'].
           "<br>and email is ".$_POST['email'].
           "<br>and mobile number is ".$_POST['mobile'];
        }
    }
}
else{
    echo "Invalid request";
}