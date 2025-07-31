<?php
// Connection parameters
$host = "localhost";      // Hostname
$user = "root";           // Default XAMPP username
$password = "";           // Default XAMPP password is empty
$database = "user-profile"; // Your database name

// Create connection
$cn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
