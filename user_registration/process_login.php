<?php
session_start();

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
$password = $_POST['password'];

// Query to check if the provided username and hashed password exist in the database
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Username and password match; user is authenticated
    $_SESSION['username'] = $username;
    header("Location: welcome.php"); // Redirect to a welcome page or another secure area
} else {
    // Invalid credentials; redirect back to the login page
    header("Location: login.html?login=failed");
}

// Close the database connection
$conn->close();
?>
