<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9e3c4
;
            margin: 0;
            padding: 0;
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
        p {
            margin-bottom: 10px;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
        .edit-btn {
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
            transition: background-color 0.3s ease;
        }
        .edit-btn:hover {
            background-color: #45a049;
        }



    </style>
</head>
<body>
    <div class="container">
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
        
                // Check if username parameter is set
                if(isset($_GET['username'])) {
                    $username = $_GET['username'];
        
                    // Retrieve user data from the database
                    $sql = "SELECT * FROM users WHERE username = '$username'";
        
                    $result = $conn->query($sql);
        
                    if ($result->num_rows > 0) {
                        // Output data of the user
                        while ($row = $result->fetch_assoc()) {
                            echo "<h1>{$row['username']}'s Profile</h1>";
                            echo "<p><strong>Full Name:</strong> {$row['fullname']}</p>";
                            echo "<p><strong>Email:</strong> {$row['email']}</p>";
                            echo "<p><strong>Contact Number:</strong> {$row['contact_number']}</p>";
                            echo "<p><strong>Address:</strong> {$row['address']}</p>";
                            echo "<p><strong>Role:</strong> {$row['role']}</p>";
                        }
                    } else {
                        echo "<p>No user found.</p>";
                    }
                } else {
                    echo "<p>Username parameter is missing.</p>";
                }
        
                $conn->close();
                ?>
 
 <button class="edit-btn" onclick="window.location.href='edit_profile.php?username=<?php echo urlencode($username); ?>'">Edit Profile</button>
 <button class="button" onclick="window.location.href='home.php'">Back to Home</button>

        
    </div>
</body>
</html>
