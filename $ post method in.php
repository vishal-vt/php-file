<?php
   echo "my name is ".$_POST["name"]."<br>";
    echo "my email is ".$_POST["email"]."<br>";
    echo "my age is ".$_POST["age"]."<br>";
    echo "my password is ".$_POST['password']."<br>";
    echo "my check is ".$_POST['check']."<br>";
     
?>
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <br>
    <input type="text" name="email" placeholder="Enter your email">
    <br>
    <input type="text" name="age" placeholder="Enter your age">
    <br>
    <input type="password" name="password" placeholder="Enter your password">
    <br
    <input type="password" name="confirm_password" placeholder="Confirm your password">
    <br>
    <button type="submit">Submit</button>
</form>