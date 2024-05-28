<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$errors = array();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Establish connection to the database
    $con = new mysqli('localhost', 'root', '', 'form');

    // Check for connection errors
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Get form data and sanitize inputs
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $aadharno = $_POST['aadhar'];
    $district = $_POST['district'];
    $placeintheni = $_POST['place'];

    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO register (firstname, middlename, lastname, email, username, password, role, aadharno, district, placeintheni) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssssssss', $firstname, $middlename, $lastname, $email, $username, $password, $role, $aadharno, $district, $placeintheni);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect users based on their roles
        switch ($role) {
            case 'Inspector':
                header("Location: inlogin.php");
                exit();
            case 'AD Mines':
                header("Location: adlogin.php");
                exit();
            case 'Quarry owner':
                header("Location: owner.php");
                exit();
            default:
                header("Location: login.php");
                exit();
        }
    } else {
        $errors[] = 'Error inserting data into database';
    }

    // Close statement and database connection
    $stmt->close();
    $con->close();
}

?>
