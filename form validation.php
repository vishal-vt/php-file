<?php
$nameerror=$emailerror='';
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['name'])){
          $nameerror="Name field is must required";
        }
        if(empty($_POST['email'])){
            $emailerror="email field is must required";
        }
        if(!empty($_POST['name']) && !empty($_POST['email'])){
            echo $_POST['name'];
            echo $_POST['email'];
        }
    }
}
?>
<form action="" method="post">
   name:<input type="text" name="name"/>
   <small style="color:red;"><?=$nameerror?></small>
   email:<input type="text" name="email">
   <small style="color:red;"><?=$emailerror?></small>
    <input type="submit" name="validate" value="validation">
</form>
