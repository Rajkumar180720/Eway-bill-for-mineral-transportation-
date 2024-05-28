<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $con = mysqli_connect('localhost', 'root', '', 'form');

    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    // Prepare and bind the statement
    $sql = "INSERT INTO ownerlog (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $username, $password);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($con);
        header("Location: process_form.php"); // Redirect to directorate.html
        exit();
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>
