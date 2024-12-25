<?php
$connection = mysqli_connect("localhost", "root", "","homwork");
if($connection){
    echo "Connected";
}
else{
    echo "Not connected";
    echo mysqli_connect_error();
}

$table = "CREATE TABLE examplefour (
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

$insert_values = "INSERT INTO examplefour (name, dept, email, addresses, area) VALUES
    ('gaurav', 'enginner', 'ryvavu@gmail.com', 'ranjitnagr', 'machanical'),
    ('yashvi', 'hr', 'hgas@gmail.com', 'abhinaditnagar', 'computer'),
    ('ankur', 'worker', 'redf@gmail.com', 'kripanditnagar', 'forensic'),
    ('hitesh', 'employee', 'ewxc@gmail.com', 'nangauri', 'botany'),
    ('aabhya', 'profesional', 'wqcx@gmail.com', 'monika', 'connection')";
if (mysqli_query($connection, $insert_values)) {
    echo "Values inserted successfully<br>";
} else {
    echo "Error inserting values: " . mysqli_error($connection);
}

?>