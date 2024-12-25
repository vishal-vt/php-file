<?php
$connection = mysqli_connect("localhost", "root", "","homwork");
if($connection){
    echo "Connected";
}
else{
    echo "Not connected";
    echo mysqli_connect_error();
}

$table = "CREATE TABLE examplefive (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name  VARCHAR(50),
    dept  VARCHAR(50),
    email VARCHAR(50),
   addresses  VARCHAR(50),
    area VARCHAR(50)
)";
if (mysqli_query($connection, $table)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

$insert_values = "INSERT INTO examplefive (name, dept, email, addresses, area) VALUES
    ('tyeyv', 'hr', 'ryvavu@gmail.com', 'gajipur', 'machanical'),
    ('ycyu', 'acountent', 'hgas@gmail.com', 'baliya', 'computer'),
    ('cbhgy', 'worker', 'redf@gmail.com', 'chapra', 'forensic'),
    ('ecvui', 'rolemodel', 'ewxc@gmail.com', 'mirapur', 'botany'),
    ('aqwxe', 'ancor', 'wqcx@gmail.com', 'gwaliyr', 'connection')";
if (mysqli_query($connection, $insert_values)) {
    echo "Values inserted successfully<br>";
} else {
    echo "Error inserting values: " . mysqli_error($connection);
}

?>