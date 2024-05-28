<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9e3c4;
            margin: 0;
            padding: 0;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: linear-gradient(to right, #fd4d54, #eb004f, #b1124c);
            color: #fff;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: blanchedalmond;
        }
        form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

     </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>
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

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $username = $_GET['username']; // Retrieve username from URL parameter
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $contact_number = $_POST['contact_number'];
            $address = $_POST['address'];

            // Update user data in the database
            $sql = "UPDATE users SET fullname='$fullname', email='$email', contact_number='$contact_number', address='$address' WHERE username='$username'";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Profile updated successfully.</p>";
            } else {
                echo "Error updating profile: " . $conn->error;
            }
        }

        // Retrieve user data from the database to pre-fill the form
        $username = $_GET['username']; // Retrieve username from URL parameter
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output edit profile form
            while ($row = $result->fetch_assoc()) {
                ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?username=<?php echo $username; ?>">
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

                    <label for="contact_number">Contact Number:</label>
                    <input type="tel" id="contact_number" name="contact_number" value="<?php echo $row['contact_number']; ?>" required>

                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required>

                    <input type="submit" value="Update Profile">

                </form>
                <button class="button" onclick="window.location.href='home.php'">Back to Home</button>

                <?php
            }
        } else {
            echo "<p>No user found.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
