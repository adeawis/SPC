<?php
// Database connection details
$host = 'localhost'; // Database host (usually 'localhost')
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password (if any)
$dbname = 'spc01'; // Your database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
