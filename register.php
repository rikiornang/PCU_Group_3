<?php
// Dummy credentials for testing
$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if credentials are correct
    if ($username === $valid_username && $password === $valid_password) {
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
        // Here you can redirect to another page or start a session
        // header("Location: welcome.php"); // Example of redirection
    } else {
        echo "Invalid username or password.";
    }
}
?>
