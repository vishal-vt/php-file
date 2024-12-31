<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost", "root", "","cr");
    $sql = "Delete from all_field where id=$id";
    if(mysqli_query($connection, $sql)){
        echo "<script>
        alert('Record deleted successfully');
        window.location.href = 'read.php';
        </script>";
    }

}else{
    echo "<script>
    alert('Record not deleted');
    window.location.href = 'read.php';
    </script>";
} 


?>