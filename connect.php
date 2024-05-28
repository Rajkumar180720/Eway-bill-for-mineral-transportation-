<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'form');
    if ($con) {
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die(mysqli_error($con));
        } else {
            header("Location: vehicle.php"); // Redirect to vehical.html
            exit();
        }
    }
}
?>
