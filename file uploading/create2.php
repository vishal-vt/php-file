<?php
$con = mysqli_connect('localhost','root','','cr');
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Name field required');
        </script>";
    }
    else{
        if(empty($_FILES['file']['name'])){
            echo "<script>
            alert('File field required');
            </script>";
        }
        else{
            $name = $_POST['name'];
            $file_name = $_FILES ['file']['name'];
            $file_tmp =$_FILES['file']['tmp_name'];
            move_uploaded_file($file_tmp, "../upload/$file_name");
            $sql = "insert into file(name,image) values('$name','$file_name')";
            if(mysqli_query($con, $sql)){
                echo "<script>
                alert('file uploaded successfully');
                </script>";
            }


        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
     Name:   <input type="text" name="name" placeholder="Enter your name">
      File:  <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>

</body>
</html>