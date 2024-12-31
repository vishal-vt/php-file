<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost", "root", "","cr");
    $sql = "delete from crud where id=$id";
    if(mysqli_query($connection, $sql)){
        echo "<script>
        alert('Data deleted successfully');
        window.location.href = 'read.php';
        </script>";
    }

}else{
    echo "<script>
    alert('Data not deleted');
    window.location.href = 'read.php';
    </script>";
} 


?>