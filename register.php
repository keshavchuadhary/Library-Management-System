<?php
session_start(); // Ensure session is started

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if 'email' key exists in $_POST array
    if(isset($_POST['email'])) {
        //something is posted
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !empty($email) && !is_numeric($username)) {
            //save to database
            $users_id = random_num(20);
            $query = "INSERT INTO users_1 (users_id, username,email, password) VALUES ('$users_id', '$username','$email', '$password')";

            $result = mysqli_query($conn, $query);

            if($result) {
                echo "<script>alert('Sign Up Successfully');</script>";
            } else {
                echo "<script>alert('Failed to register. Please try again later.');</script>";
            }
        } else {
            echo "<script>alert('Please fill out all fields correctly');</script>";
        }
    } else {
        echo "<script>alert('Email field is missing');</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>
<body>
    <div class="header">
        <a href="index.html" class="logo"><i class="fas fa-book"> LIBRARY MANAGEMENT SYSTEM </i></a>
    </div>
    <div class="container">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="" method="post">
            
              

                <div class="field input">
                    <label for="email" >username</label>
                    <input type="username" name="username" id="username" autocomplete="off" required>

                </div>
                <div class="field input">
                    <label for="email" >email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                    
                </div>

                <div class="field input">
                    <label for="password" >password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                    
                </div>

                <div class="filed input">
                    <label for="Confirm Password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirmpassword" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Sign up" required>
                    
                </div>
                <div class="links">
                    Already Have Account? <a href="login.php">Sign In</a>
                </div>

            </form>
        </div>
    </div>
    <!-- custom Js file link -->
    <script  src="JS/script.js">
        
    </script>
</body>
</html>