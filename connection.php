<?php
// Database credentials
$host = 'localhost';        // Hostname
$username = 'root';   // Database username
$password = '';   // Database password
$database = 'ecom';   // Database name

// Establish a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
