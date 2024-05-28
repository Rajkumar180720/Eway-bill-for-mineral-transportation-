<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass Application</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>


    <style>
        body {  
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        header {
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, h3 {
            margin: 0;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .center {
            text-align: center;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="email"], input[type="date"], select {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #45a049;
            margin-left: calc(50% - 85px); /* Adjusted for center alignment */
        }
        img {
            width: 70px;
            float: right;
            margin-right: 20px;
            margin-bottom: 10px;
        }
        .nav-menu {
            list-style-type: none;
            padding: 10px 0; 
            margin: 0;
            text-align: center;
            background-color: bisque;
        }
        .nav-menu li {
            display: inline-block;
            margin-right: 20px;
        }
        .nav-menu li:last-child {
            margin-right: 0;
        }
        .nav-menu li a {
            text-decoration: none;
        }
        .nav-icon {
            vertical-align: middle;
            margin-right: 5px;
        }
        .nav-menu li a:hover {
            text-decoration: underline;
        }
        .nav-menu li a img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }
        .center-text {
            text-align: center;
        }
        .flex-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        #qrcode {
            margin-top: 20px; /* Adjust this value as needed */
            text-align: center;
        }

        .button-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

    </style>
</head>
 
<body>
    <header>
        <img src="images/tnsymbol.png" alt="Government Logo" width="150">
        <h1>Government of Tamil Nadu</h1>
        <h2>Department of Geology and Mines</h2>
    </header>

    <ul class="nav-menu">
        <li><a href="home.php"><img class="nav-icon" src="images/3d-house.png" alt="Home"> Home</a></li>
        <li><a href="services.html"><img class="nav-icon" src="images/service.png" alt="Services"> Services</a></li>
        <li><a href="aboutus.html"><img class="nav-icon" src="images/list.png" alt="About Us"> About Us</a></li>
        <li><a href="contact.html"><img class="nav-icon" src="images/phone-call.png" alt="Contact"> Contact</a></li>
    </ul>

    <div class="container">
        <h1 class="center-text">Government of Tamil Nadu</h1>
        <img src="images/tnsymbol.png" alt="Government Logo" width="150">

 

        <h3 style="text-decoration: underline;">E-Transit pass</h3>
        

        <form id="passForm" method="post" action="">
            <table>
                <!-- Form fields -->
                <!-- Your form fields go here -->
                <tr>
                    <th colspan="2">Personal Information</th>
                </tr>

                <tr>
                    <td><label for="quarry-name">Quarry Name:</label></td>
                    <td><input type="text" id="quarry-name" name="quarry-name" required></td>
                </tr>
                <tr>
                    <td><label for="owner-name">Quarry Owner:</label></td>
                    <td><input type="text" id="owner-name" name="owner-name" required></td>
                </tr>
                <tr>
                    <td><label for="mobile-no">Mobile Number:</label></td>
                    <td><input type="text" id="mobile-no" name="mobile-no" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <th colspan="2">Pass Details</th>
                </tr>
                <tr>
                    <td><label for="mineral-type">Mineral Type:</label></td>
                    <td><input type="text" id="mineral-type" name="mineral_type" required></td>
                </tr>
                <tr>
                    <td><label for="quantity">Quantity:</label></td>
                    <td><input type="text" id="quantity" name="quantity" required></td>
                </tr>
                <tr>
                    <td><label for="transportation-date">Transportation Date:</label></td>
                    <td><input type="date" id="transportation-date" name="transportation_date" required></td>
                </tr>
                <tr>
                    <td><label for="places">Selected Place:</label></td>
                    <td>
                        <select id="places" name="places" required>
                            <option value="">Select Place</option>
                            <option value="andipatti">Andipatti</option>
                            <option value="bodi">Bodi</option>
                            <option value="cumbum">Cumbum</option>
                            <option value="gudalur">Gudalur</option>
                            <option value="kamayagoundanpatti">Kamayagoundanpatti</option>
                            <option value="kombai">Kombai</option>
                            <option value="kurangani">Kurangani</option>
                            <option value="megamalai">Megamalai</option>
                            <option value="periyakulam">Periyakulam</option>
                            <option value="thevaram">Thevaram</option>
                            <option value="udumbanchola">Udumbanchola</option>
                            <option value="theni">Theni</option>
                            <option value="usilampatti">Usilampatti</option>
                            <option value="bodinayakanur">Bodinayakanur</option>
                            <option value="devadanapatti">Devadanapatti</option>
                            <option value="chinamanur">Chinamanur</option>
                            <option value="veerapandi">Veerapandi</option>
                            <option value="aarani">Aarani</option>
                            <option value="thandukaranai">Thandukaranai</option>
                            <option value="kailasapuram">Kailasapuram</option>
                            <option value="bharatipuram">Bharatipuram</option>
                            <option value="kottur">Kottur</option>
                            <option value="nallamannagoundenpatti">Nallamannagoundenpatti</option>
                            <option value="sothuparai">Sothuparai</option>
                            <option value="vilathikulam">Vilathikulam</option>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
        <div id="qrcode" class="center"></div>
    </div>
 
 
 
</body>
</html>

         <!-- Send to AD Mines button -->
        <div class="button-container">
    <button onclick="redirectToEmail()" style="background-color: #007bff; padding: 10px 20px; height: 50px; width: 30%; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; margin-right: 10px;">Send Email</button>
    <button type="button" onclick="generatePDF()" style="background-color: #007bff; padding: 10px 20px; height: 50px; width: 30%; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 18px; margin-right: 10px;">Download PDF</button>
    <!-- Send to AD Mines button -->
    <!-- Hidden file input element -->
 
         <!-- Hidden file input element -->
        <input type="file" id="file-input" style="display:none">
    </div>

    <script>
        function generatePDF() {
            const formData = new FormData(document.getElementById('passForm'));
            let dataString = '';
            for (let [key, value] of formData.entries()) {
                dataString += `${key}: ${value}\n`;
            }

            // Initialize QRCode generator
            var qr = new QRCode(document.getElementById("qrcode"), {
                width: 200,
                height: 200
            });

            // Generate QR code for the form data
            qr.makeCode(dataString);

            // Generate PDF
            const element = document.querySelector('.container');
            html2pdf().from(element).save();
        }

        function generateQRCode() {
            const formData = new FormData(document.getElementById('passForm'));
            let dataString = '';
            for (let [key, value] of formData.entries()) {
                dataString += `${key}: ${value}\n`;
            }

            // Initialize QRCode generator
            var qr = new QRCode(document.getElementById("qrcode"), {
                width: 200,
                height: 200
            });

            // Generate QR code for the form data
            qr.makeCode(dataString);
        }

        function redirectToEmail() {
        // Define recipient email address
        var recipientEmail = 'christoanto838@gmail.com'

        // Define subject and body of the email
        var subject = 'Regarding Accident Report';
        var body = 'Dear recipient,\n\nI would like to report an accident.\n\nPlease find the details below:\n- Description:\n- Location:\n- Time:\n\nThank you.';

        // Encode subject and body for URL
        subject = encodeURIComponent(subject);
        body = encodeURIComponent(body);

        // Construct mailto link
        var mailtoLink = 'mailto:' + recipientEmail + '?subject=' + subject + '&body=' + body;

        // Redirect to email client
        window.location.href = mailtoLink;
    }

    </script>
</body>
</html>
