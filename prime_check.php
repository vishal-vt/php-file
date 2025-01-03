<?php
    $number = $_POST['number'];

    if ($number > 1) {
        $Prime = true;
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                $Prime = false;
                break;
            }
        }
        if ($Prime) {
            echo "this is a prime number.";
        } else {
            echo "this is not a prime number.";
        }
    } else {
        echo "this is not a prime number.";
    }
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="prime_check.php">
  Number: 
  <input type="text" name="number">
  <input type="submit">
</form>

</body>
</html>
