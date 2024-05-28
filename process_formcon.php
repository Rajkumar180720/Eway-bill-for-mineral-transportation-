<?php
$con = new mysqli('localhost', 'root', '', 'form');

$errors = []; // Initialize $errors as an empty array

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form inputs
    $full_name = isset($_POST['full-name']) ? $_POST['full-name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $mobile_number = isset($_POST['mobile-no']) ? $_POST['mobile-no'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';

    // Check if email already exists
    $checkUser = "SELECT * FROM profile_data WHERE email = ?";
    $stmt = $con->prepare($checkUser);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count > 0) {
        echo "User already signed up";
        exit(); // Exit after displaying the message
    }

    // Check if username already exists
    $checkUsername = "SELECT * FROM profile_data WHERE username = ?";
    $stmtUsername = $con->prepare($checkUsername);
    $stmtUsername->bind_param('s', $username);
    $stmtUsername->execute();
    $resultUsername = $stmtUsername->get_result();
    $countUsername = $resultUsername->num_rows;

    if ($countUsername > 0) {
        echo "Username already exists";
        exit(); // Exit after displaying the message
    }

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO profile_data (full_name, email, mobile_number, username, address) VALUES (?, ?, ?, ?, ?)";
    $stmtInsert = $con->prepare($sql);
    $stmtInsert->bind_param('sssss', $full_name, $email, $mobile_number, $username, $address);

    // Execute the prepared statement
    if ($stmtInsert->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmtInsert->error;
    }

    // Close the prepared statement and database connection
    $stmtInsert->close();
    $con->close();
}
?>
