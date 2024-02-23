<?php
session_start(); // Ensure session is started

include("connection.php");
include("function.php");

if(isset($_POST['submit'])) {
    //something is posted
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password) && !is_numeric($username)) {
        //read from database
        $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password) {
                $_SESSION['users_id'] = $user_data['users_id'];
                header('Location: index.php');
                exit(); // Use exit instead of die
            }
        }
    }
    echo "Please enter valid information";
} else {
    echo "Please enter valid information";
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
    <div class="header">
        <a href="index.html" class="logo"><i class="fas fa-book"> LIBRARY MANAGEMENT SYSTEM </i></a>
    </div>
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