<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dskafagway";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($con->query($sql) === TRUE) {
    echo "Database $dbname created successfully<br>";
} else {
    echo "Error creating database: " . $con->error . "\n";
}

// Switch to the created database
$con->select_db("$dbname");

// Create Patient table
$sql = "CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    doctor VARCHAR(255) NOT NULL,
    address VARCHAR(250) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mobileNo VARCHAR(50) NOT NULL,
    status VARCHAR(255) NOT NULL,
    service VARCHAR(255) NOT NULL,
    schedule DATE NOT NULL   
)";

if ($con->query($sql) === TRUE) {
    echo "Table $dbname created successfully<br>";
} else {
    echo "Error creating table $dbname: " . $con->error . "\n";
}

// Create Patient table
$sql = "CREATE TABLE IF NOT EXISTS patientLists (
    plid INT AUTO_INCREMENT PRIMARY KEY,
    plname VARCHAR(50) NOT NULL,D
    address VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mobileNo VARCHAR(50) NOT NULL,
    pldoctor VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    schedule DATE NOT NULL   
)";

if ($con->query($sql) === TRUE) {
    echo "Table $dbname created successfully<br>";
} else {
    echo "Error creating table $dbname: " . $con->error . "\n";
}


// Close connection
$con->close();
?>