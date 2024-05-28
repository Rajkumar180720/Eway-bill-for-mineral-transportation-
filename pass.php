<?php
$con = new mysqli('localhost', 'root', '', 'form');

if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}

// Fetch data from quarry table
$sqlQuarry = "SELECT * FROM quarry";
$resultQuarry = $con->query($sqlQuarry);

// Fetch data from vehicle table
$sqlVehicle = "SELECT * FROM vehicle";
$resultVehicle = $con->query($sqlVehicle);

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .pdf-container {
            width: 21cm;
            height: 29.7cm;
            margin: 2cm auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            page-break-before: always; /* Add page break before each section for printing */
        }

        h2 {
            text-align: center;
            color: #333;
        }

        h3 {
            margin-top: 20px;
            color: #555;
        }

        form {
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="date"] {
            width: calc(100% - 18px);
        }

        /* Print styles */
        @media print {
            body {
                background-color: #fff; /* Set background color for printing */
            }

            .pdf-container {
                margin: 0;
                box-shadow: none;
            }

            input {
                border: none; /* Remove border for printing */
            }
        }
    </style>
</head>
<body>

    <div class="pdf-container">
        <h2>Data Display Form</h2>

        <!-- Display data from quarry table -->
        <h3>Data from Quarry Table</h3>
        <form>
            <?php
            while ($rowQuarry = $resultQuarry->fetch_assoc()) {
                echo '<label>Quarry Name: <input type="text" value="' . $rowQuarry['quarryname'] . '"></label><br>';
                echo '<label>License Number: <input type="text" value="' . $rowQuarry['licensenumber'] . '"></label><br>';
                echo '<label>Owner Name: <input type="text" value="' . $rowQuarry['quarryownername'] . '"></label><br>';
                echo '<label>Address: <input type="text" value="' . $rowQuarry['address'] . '"></label><br>';
                echo '<label>Minerals: <input type="text" value="' . $rowQuarry['minerals'] . '"></label><br>';
                // Repeat for other columns as needed
            }
            ?>
        </form>

        <!-- Display data from vehicle table -->
        <h3>Data from Vehicle Table</h3>
        <form>
            <?php
            while ($rowVehicle = $resultVehicle->fetch_assoc()) {
                echo '<label>Vehicle Number: <input type="text" value="' . $rowVehicle['vehiclenumber'] . '"></label><br>';
                echo '<label>Driver Name: <input type="text" value="' . $rowVehicle['drivername'] . '"></label><br>';
                echo '<label>Driver Number: <input type="text" value="' . $rowVehicle['drivernumber'] . '"></label><br>';
                echo '<label>From Location: <input type="text" value="' . $rowVehicle['fromlocation'] . '"></label><br>';
                echo '<label>To Location: <input type="text" value="' . $rowVehicle['tolocation'] . '"></label><br>';
                echo '<label>Date: <input type="text" value="' . $rowVehicle['dates'] . '"></label><br>';
                // Repeat for other columns as needed
            }
            ?>
        </form>
    </div>

</body>
</html>
