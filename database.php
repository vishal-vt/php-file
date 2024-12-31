<?php
$connection = mysqli_connect("localhost", "root", "","homwork");
if($connection){
    echo "Connected";
}
else{
    echo "Not connected";
    echo mysqli_connect_error();
}

// $table = "CREATE TABLE example_table (
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

// $insert_values = "INSERT INTO example_table (name, class, email, addresses, subjects) VALUES
//     ('Rohan', '12', 'hgas@gmail.com', 'rainagar', 'maths'),
//     ('Sohan', '12', 'tsdf@gmail.com', 'salikpur', 'physics'),
//     ('Mohan', '12', 'redf@gmail.com,', 'kolkata', 'chemistry'),
//     ('Dhanu', '12', 'ewxc@gmail.com', 'delhi', 'biology'),
//     ('Ravi', '12', 'wqcx@gmail.com', 'mumbai', 'english')";
// if (mysqli_query($connection, $insert_values)) {
//     echo "Values inserted successfully<br>";
// } else {
//     echo "Error inserting values: " . mysqli_error($connection);
// }
// $sql = "delete from example_table where id=5";
// echo mysqli_query($connection, $sql);
// echo mysqli_affected_rows($connection);

$sql = "SELECT * FROM example_table";
$result = mysqli_query($connection, $sql);
echo mysqli_num_rows($result);
echo "<pre>";
// print_r(mysqli_fetch_assoc($result));
while($row = mysqli_fetch_assoc($result)){
    print_r($row ['name']);
}
?>