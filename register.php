<?php
// Establish connection to your database
$servername = "localhost";
$username = "root";
$password = ""; // Add your database password here
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form fields are set
if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['contact_number']) && isset($_POST['address']) && isset($_POST['role'])) {
    // Get form data
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (fullname, username, password, email, contact_number, address, role) VALUES ('$fullname', '$username', '$hashed_password', '$email', '$contact_number', '$address', '$role')";

    if ($conn->query($sql) === TRUE) {
        // Redirect user to their profile page after successful registration
        header("Location: profile.php?username=$username");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "One or more required fields are missing.";
}

$conn->close();
?>
