<?php
// Database configuration
$dbHost = 'localhost';
$dbUser = 'root'; // Replace with your MySQL username
$dbPass = 'john_wick_77'; // Replace with your MySQL password
$dbName = 'mywebsite'; // Replace with your database name

// Create a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$username = $_POST['username'];
$email = $_POST['email'];

// Insert user data into the database
$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
