<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['submit'])){
    if(empty($_POST['select'])){
        header('location:radio-validation.php?countryerror=please select your orgin country');
    }
    elseif(empty($_POST['gender'])){
        header('location:radio-validation.php?gendererror=please select your gender');
    }
    else{
            echo "my name is ".$_POST['select'].
           "<br>and email is ".$_POST['gender'];
        }
    }
}
?>