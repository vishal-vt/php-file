<?php
$connection = mysqli_connect("localhost", "root", "","homwork");
if($connection){
    echo "Connected";
}
else{
    echo "Not connected";
    echo mysqli_connect_error();
}

// $table = "CREATE TABLE exampletwo (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name  VARCHAR(50),
//     class  VARCHAR(50),
//     email VARCHAR(50),
//    addresses  VARCHAR(50),
//     subjects VARCHAR(50)
// )";
// if (mysqli_query($connection, $table)) {
//     echo "Table created successfully<br>";
// } else {
//     echo "Error creating table: " . mysqli_error($connection);
// }

// $insert_values = "INSERT INTO exampletwo (name, class, email, addresses, subjects) VALUES
//     ('kaju', '11', 'hgas@gmail.com', 'moen', 'maths'),
//     ('raju', '11', 'tsdf@gmail.com', 'somay', 'physics'),
//     ('natu', '9', 'redf@gmail.com,', 'kirpya', 'chemistry'),
//     ('khatu', '08', 'ewxc@gmail.com', 'anjunagar', 'biology'),
//     ('athu', '07', 'wqcx@gmail.com', 'mumbai', 'english')";
// if (mysqli_query($connection, $insert_values)) {
//     echo "Values inserted successfully<br>";
// } else {
//     echo "Error inserting values: " . mysqli_error($connection);
// }
$sql = "delete from exampletwo where id=4";
echo mysqli_query($connection, $sql);

?>