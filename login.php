<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where mail = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($resuly) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                     header("location: index.php");
                     die;
                    }
                }
            }
            echo "<script type='text/javascript'>alert('wrong username or password')</script>";
        }
        else{
        echo "<script type='text/javascript'>alert('wrong username or password')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="Login">
        <h1>login</h1>
        <h4>its free and only takes a minute</h4>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="" required>
            <label>password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Not have an account? <a href="signup.php">signup Here</a></p>
</body>
</html>