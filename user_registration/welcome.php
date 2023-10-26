<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Redirect to the login page if not logged in
    exit;
}

// Get the logged-in username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome, <?php echo $username; ?></title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is a secure area. You are logged in.</p>
    <p><a href="logout.php">Log Out</a></p>
</body>
</html>
