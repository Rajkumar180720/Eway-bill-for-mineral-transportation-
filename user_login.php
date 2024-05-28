<!DOCTYPE html>
<html lang="en">
<style>
        
        input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #66afe9;
    box-shadow: 0 0 5px #66afe9;
}

button[type="submit"] {
    width: 100%;
    background-color: #337ab7;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #286090;
}

a.button {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #5bc0de;
    color: white;
    text-decoration: none;
    border-radius: 3px;
}

a.button:hover {
    background-color: #31b0d5;
}

@media (max-width: 600px) {
    form {
        padding: 10px;
        max-width: 90%;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px);
        margin-right: 10px;
        margin-bottom: 10px;
    }

    button[type="submit"],
    a.button {
        width: calc(50% - 5px);
        margin-top: 10px;
        margin-right: 5px;
        margin-left: 5px;
    }
}
        body {
    font-family: Arial, sans-serif;
    background-color: #576272;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #873e3c
;
    margin-left: 650px;
}

form {
    max-width: 400px;
    margin: 30px auto;
    margin-left: 850px;
    padding: 29px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

a.button {
    display: block;
    text-align: center;
    background-color: #008CBA;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 3px;
}
body{
    background-color: #f0e6e9;
}

a.button:hover {
    background-color: #005f6b;
}
.welcome-text {
            text-align: center;
            font-size: 24px;
            animation: slideIn 1s ease forwards;
            opacity: 0;

        }

        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="icon" href="images/logo.jpg" type="image/jpg">

</head>
<body>

<img src="images/Frame 172.png" alt="Government of Tamil Nadu Logo" style=width:100%;>

<div class="welcome-text">
        <h2>Welcome to User Login</h2>
    </div>
     <form action="user_authenticate.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
