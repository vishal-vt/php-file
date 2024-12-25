
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['validate'])){
        if(empty($_POST['subject'])){
echo "<script>alert('Please select at least one subject');
window.location.href='checkbox-validation2.php';
</script>";
        }
        else{
            print_r($_POST['subject']);
    }
}
}
else{
    echo "Invalid request";
}