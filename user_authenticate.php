<?php
session_start();

// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE username='$username' AND role='user'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Authentication successful, redirect to user dashboard or homepage
        $_SESSION['username'] = $username;
        header("Location: process_form.php");
        exit();
    } else {
        // Incorrect password
        echo "Incorrect password";
    }
} else {
    // User not found or not a user
    echo "Invalid username or role";
}

$conn->close();
?>
