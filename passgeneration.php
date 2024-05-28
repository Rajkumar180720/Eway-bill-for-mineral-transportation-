<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pass Generation Form</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 0px;
            padding: 0px;
            background-color: ivory;
            overflow-y: scroll;
        }

        header {
            background-color: grey;

        }

        #nav1 {
            background-color: rgb(231, 231, 21);
            padding: 0px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: darkblue;
        }

        h2 {
            text-align: center;
            color:palegreen;
        }

        #nav1 a {
            text-decoration: none;
            color: blueviolet;
            display: block;
            padding: 10px;
            transition: color 0.3s;
        }

        #nav1 a:hover {
            color: #e64f4f;
        }

        #nav1 ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        #nav1 li {
            margin-right: 20px;
            position: relative;
        }

        #nav1 .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #e9e3e3;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            z-index: 1;
        }

        #nav1 .dropdown:hover .dropdown-menu {
            display: block;
        }

        #nav1 .dropdown-menu a {
            padding: 10px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s;
        }

        #nav1 .dropdown-menu a:hover {
            background-color: rgb(230, 227, 227);
        }

        .registration-column {
            width: 80%; /* Adjust width as needed */
            margin: 0 auto; /* Center align the column */
            padding: 20px; /* Adjust padding as needed */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-color: brown;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="username"],
        input[type="password"],
        input[type="number"],
        input[type="date"] {
            width:200px; /* Adjust width as needed */
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        select {
            width: 50%; Adjust width as needed */
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

        .form-group.inline {
            display: flex;
            justify-content: space-between;
        }

        @media only screen and (max-width: 368px) {
            .registration-column {
                width: 100%;
            }
        }
        #places{
            width: 200px;
            height: 50px;

        }

         
    </style>
</head>
<body>

<header>

<div class="login-reg-block">
    <a href="javascript:void(0)" class="login-reg-icon" title="Login" onclick="openLoginModal()">
        <img src="images/profile-default.svg" alt="Login">
    </a>
    <div class="login-details">
        <span>Together, Let's Engage In Good Governance</span>
        <!-- Login and Register links are moved to the modal -->
    </div>
</div>

<!-- Modal -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeLoginModal()">&times;</span>
        <a href=" register.php" class="ac-login" title="Login">Login</a>
        <a href=" profile.php" class="ac-register" title="Register">Register</a>
    </div>
</div>

    <h1>Government of Tamil Nadu</h1>
    <h2>Department of Geology and Mines</h2>
</header>

<nav id="nav1">
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li class="dropdown">
            <a href="#" title="Login">Login</a>
            <ul class="dropdown-menu">
                <li><a href="adlogin.php">AD Login</a></li>
                <li><a href="inlogin.php">Inspector Login</a></li>
                <li><a href="owner.php">Quarry Owner Login</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="registration-column">
    <h3 style="text-decoration: underline; color:orangered;">Enter Details for E-Pass</h3>
    <form action="process_form.php" method="post">
<div class="form-group">
            <label for="quarry-name">Quarry Name</label>
            <input type="text" id="quarry-name" name="quarry-name" required>
        </div>
        <div class="form-group">
            <label for="owner-name">Quarry Owner</label>
            <input type="text" id="owner-name" name="owner-name" required>
        </div>
        <div class="form-group">
            <label for="mobile-no">Mobile number</label>
            <input type="text" id="mobile-no" name="mobile-no" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="mineral_type">Mineral Type:</label>
            <input type="text" id="mineral_type" name="mineral_type" required>
        </div>
 
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" required><br><br>
    
    <label for="transportation_date">Transportation Date:</label><br>
    <input type="date" id="transportation_date" name="transportation_date" required><br><br>
    
    <label for="places">Places in Theni District:</label><br>

    <select id="places" name="places">
        <option value="Andipatti">Andipatti</option>
        <option value="Bodinayakanur">Bodinayakanur</option>
        <option value="Cumbum">Cumbum</option>
        <option value="Gudalur">Gudalur</option>
        <option value="Kambam">Kambam</option>
        <option value="Periyakulam">Periyakulam</option>
        <option value="Theni Allinagaram">Theni Allinagaram</option>
        <option value="Uthamapalayam">Uthamapalayam</option>
        <option value="Thevaram">Thevaram</option>
        <option value="Veerapandi">Veerapandi</option>
        <option value="Andipatti Jakkampatti">Andipatti Jakkampatti</option>
        <option value="Aundipatti">Aundipatti</option>
        <option value="Chinnamanur">Chinnamanur</option>
        <option value="Ganguvarpatti">Ganguvarpatti</option>
        <option value="Gandamanur">Gandamanur</option>
        <option value="Gudalur">Gudalur</option>
        <option value="Jangalpatti">Jangalpatti</option>
        <option value="Kombai">Kombai</option>
        <option value="Kuchanur">Kuchanur</option>
        <option value="Nallamudiyampatti">Nallamudiyampatti</option>
        <option value="Perumalmalai">Perumalmalai</option>
        <option value="Rayapanpatti">Rayapanpatti</option>
        <option value="Sithayankottai">Sithayankottai</option>
        <option value="SukkangalPatti">SukkangalPatti</option>
        <option value="Tiruppachetti">Tiruppachetti</option>
        <option value="Thenkarai">Thenkarai</option>
        <option value="Upparpatti">Upparpatti</option>
        <option value="Veppampatti">Veppampatti</option>
        <option value="Varusanadu">Varusanadu</option>
        <option value="Pannaipuram">Pannaipuram</option>
        <option value="Kadamalaikundu">Kadamalaikundu</option>
        <!-- Add more options for other places in Theni district -->
    </select><br>

    <input type="submit" value="Submit">

</div>
 
<script>
    function openLoginModal() {
        var modal = document.getElementById("loginModal");
        modal.style.display = "block";
    }

    function closeLoginModal() {
        var modal = document.getElementById("loginModal");
        modal.style.display = "none";
    }
</script>
 
  </body>

  
</html>
