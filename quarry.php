<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarry Details Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('login.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff; /* Text color for better contrast on the background image */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Set the height to 100% of the viewport height */
        }

        .container {
            width: 100%;
            max-width: 500px; /* Adjusted max-width as needed */
            padding: 40px 40px 40px 20px; /* Adjusted padding (top right bottom left) */
            background: rgba(0, 0, 0, 0.7); /* Add transparency to the background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px; /* Added margin for better spacing between buttons */
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
   
    <div class="container">
        <h2>Quarry Details</h2>
        <form action="qcon.php" method="post">
            <div class="form-group">
                <label for="quarry-name">Quarry Name</label>
                <input type="text" id="quarry-name" name="quarry-name" required>
            </div>
            <div class="form-group">
                <label for="license-number">Quarry License Number</label>
                <input type="text" id="license-number" name="license-number" required>
            </div>
            <div class="form-group">
                <label for="owner-name">Quarry Owner Name</label>
                <input type="text" id="owner-name" name="owner-name" required>
            </div>
            <div class="form-group">
                <label for="address">Address of Quarry</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="minerals">Minerals Obtained in Quarry</label>
                <input type="text" id="minerals" name="minerals" required>
            </div>
            <button type="submit"><a href="vehicle.php">Back</a></button>
            <button type="submit"><a href="pass.html">Submit</button>
        </form>
    </div>
</body>
</html>
