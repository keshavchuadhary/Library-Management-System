<?php
session_start();

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Include connection and function files
    include("connection.php");
    include("function.php");

    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (you may want to add more validation)
    if(!empty($username) && !empty($password)) {
        // Query the database to check if the username and password match
        $query = "SELECT * FROM users_1 WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            // Verify password
            if( $user_data['password']) {
                // Password is correct, set session variable
                $_SESSION['users_id'] = $user_data['users_id'];
                // Redirect to index.php or any other page
                echo'
                <script>
                alert("Logged In Sucessfully");
                window.location.href = "index.php";
                </script>';
                exit();
            } else {
                // Invalid password
                echo "Invalid password.";
            }
        } else {
            // User not found
            echo "Username not found.";
        }
    } else {
        // Username or password is empty
        echo "Please enter both username and password.";
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
    <title>Login</title>
</head>
<body>
    <header class="header">
    <div class="header-1">
        <a href="index.php" class="logo"><i class="fas fa-book"></i> LIBRARY MANAGEMENT SYSTEM </a>
      
    </div>
    <div class="header-2">
            <nav class="navbar">
                <a href="Admin_login.php">Admin</a>
            </nav>
    </div>
    

    
    </header>

    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">

                <div class="field input">
                    <label for="username" >username</label>
                    <input type="text" name="username" id="username" required>

                </div>

                <div class="field input">
                    <label for="password" >password</label>
                    <input type="password" name="password" id="password" required>
                    
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Login" required>
                    
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up Now</a>
                </div>

            </form>
        </div>
    </div>
    <!-- custom Js file link -->
    <script  src="JS/script.js">
        
    </script>
</body>
</html>