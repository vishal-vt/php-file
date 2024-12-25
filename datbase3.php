<?php
$connection = mysqli_connect("localhost", "root", "", "homwork");
if ($connection) {
    echo "Connected<br>";
} else {
    echo "Not connected<br>";
    echo mysqli_connect_error();
}

$table = "CREATE TABLE examplethree (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    class VARCHAR(50),
    email VARCHAR(50),
    address VARCHAR(50),
    subjects VARCHAR(50)
)";
if (mysqli_query($connection, $table)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

$insert_values = "INSERT INTO examplethree (name, class, email, address, subjects) VALUES
    ('arya', '8', 'ryvavu@gmail.com', 'ranjitnagar', 'maths'),
    ('bhvya', '7', 'hgas@gmail.com', 'abhinaditnagar', 'physics'),
    ('navya', '5', 'redf@gmail.com', 'kripanditnagar', 'chemistry'),
    ('kabhya', '3', 'ewxc@gmail.com', 'nangauri', 'biology'),
    ('aabhya', '9', 'wqcx@gmail.com', 'monika', 'english')";
if (mysqli_query($connection, $insert_values)) {
    echo "Values inserted successfully<br>";
} else {
    echo "Error inserting values: " . mysqli_error($connection);
}

mysqli_close($connection);
?>