<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'lsp_kursus';

// Establish a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
