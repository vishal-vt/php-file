<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','app25');
    $sql = "DELETE FROM home WHERE id=$id";
    if(mysqli_query($con, $sql)){
        echo "<script>
        alert('Record deleted successfully');
        window.location.href='read.php';
        </script>";
    } else {
        echo "<script>
        alert('Error deleting record');
        window.location.href='read.php';
        </script>";
    }
}
?>
