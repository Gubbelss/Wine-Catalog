<?php
$servername = "localhost";
$username = "my_wine_catalog__user";
$password = "my_wine_catalog__user";
$dbname = "my_wine_catalog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*
// sql to create table
$sql = "CREATE TABLE MyWineCatalog (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
winzer VARCHAR(30) NOT NULL,
region VARCHAR(30) NOT NULL,
jahrgang SMALLINT(4) NOT NULL,
volume FLOAT(3, 2) NOT NULL,
quantity TINYINT(3) NOT NULL,
self_score FLOAT(2, 2) NOT NULL,
critic_score FLOAT(2, 2) NOT NULL,
price_perbottle DOUBLE(10, 2) NOT NULL,
price_total DOUBLE(20, 3) NOT NULL,
currency VARCHAR(1) NOT NULL,
reg_date TIMESTAMP
)";
*/

//$sql = "INSERT INTO MyWineCatalog (name, winzer, region, jahrgang, volume, quantity, self_score, critic_score, price_perbottle)
//VALUES ('Winzer-example', 'Region-example', 'Jahrgang-example')";
/*
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
$conn->close();
?>
