<?php
session_start();

include("connection.php");
include("function.php");

$user_logged_in = false; // Assume user is not logged in by default

if(isset($_SESSION['users_id'])) {
    // User is logged in
    $user_logged_in = true;

    // Fetch user data if needed
    $user_id = $_SESSION['users_id'];
    $query = "SELECT * FROM users_1 WHERE users_id = '$user_id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        // Now $user_data contains user information
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">

</head>
<body>
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book"> LIBRARY MANAGEMENT SYSTEM </i></a>
            <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                
                
                
                <a href="login.php" class="fas fa-user" id="login-btn"></a>
                <div class="icons">
            <!-- Search button -->
            
            <!-- Login or username -->
            <?php if($user_logged_in): ?>
                <p> <?php echo $user_data['username']; ?></p>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
            <?php endif; ?>
        </div>
                
            </div> 
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="index.php">Home</a>
                <!-- <a href="#Featured">Featured</a> -->
                <a href="#">Arrivals</a>
                <!-- <a href="#Review">Review</a> -->
                <a href="contact.php">Contact Us</a>
            </nav>
        </div>
       </header>

       <!-- header section end here -->
       <!-- bottom navbar -->
       
    </div>
    <!-- home section starts -->
    <div class="container">
        <form action="#" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">username:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>


 



    <!-- custom Js file link -->
    <script  src="JS/script.js">
        
    </script>
</body>
</html>