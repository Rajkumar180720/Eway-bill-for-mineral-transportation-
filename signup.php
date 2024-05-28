<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" href="images/logo.jpg" type="image/jpg">

    <style>
body {
    font-family: Arial, sans-serif;
     margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #fce9e1; /* Set the background color to light blue */

}        
        .signup-container {
            background-color: #482a2a;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 90%;
            text-align: center;
         }
        
         
        h2 {
            color: #fce9e1;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #fce9e1
;
            font-weight: 600;
        }
        
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #4CAF50;
        }
        
        
        button[type="submit"] {
            background: linear-gradient(to right, #4CAF50, #45a049);
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s;
        }
        
        
        button[type="submit"]:hover {
            background: linear-gradient(to right, #45a049, #4CAF50);
        }

        /* Add more advanced design elements as needed */

    </style>
</head>
<body>

<div class="parent">
    <img class="image1" src="images/Frame 172.png" style= width:1000px;padding-bottom:20px;/>
    <img class="image2" src="images/mines.gif" style= width:1000px;margin-right:10px;/>
</div> 


     
    <div class="signup-container" style= width:750px;>
        <h2>Signup</h2>
        <form action="register.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" required>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>
            
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            
            <button type="submit">Signup</button>
        </form>
    </div>
</body>
</html>