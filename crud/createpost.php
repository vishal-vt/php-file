<?php
$connection = mysqli_connect("localhost", "root", "","cr");
if ($_SERVER['REQUEST_METHOD']=='POST'){
   if (empty($_POST['fname'])){
    echo "<script>
    alert('Name is required');
    window.location.href = 'createform.php';
    </script>";
   }
   elseif (empty($_POST['lname'])){
    echo "<script>
    alert('Name is required');
    window.location.href = 'createform.php';
    </script>";
   }
    elseif (empty($_POST['phone'])){
     echo "<script>
     alert('Phone is required');
     window.location.href = 'createform.php';
     </script>";
    }
    elseif (empty($_POST['email'])){
     echo "<script>
     alert('Email is required');
     window.location.href = 'createform.php';
     </script>";
    }
    else{
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql = "INSERT INTO crud (fname, lname, phone, email) VALUES ('$fname', '$lname', '$phone', '$email')";
       if(mysqli_query($connection, $sql)){
              echo "<script>
              alert('Data inserted successfully');
              window.location.href = 'read.php';
              </script>";
         }
    }
}
       ?>