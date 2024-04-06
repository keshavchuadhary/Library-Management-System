<?php
session_start();

include("connection.php");
include("function.php");
$new_users_id = 5 + 1; // Increment the maximum value by 1


$user_logged_in = false; // Assume user is not logged in by default

if(isset($_SESSION['users_id'])) {
    // User is logged in
    $user_logged_in = true;

    // Fetch user data if needed
    $user_id = $_SESSION['users_id'];
    $query = "SELECT * FROM admin WHERE users_id = '$user_id' LIMIT 1";
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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<h1>Welcome to Admin Dashboard</h1>
<div class="navbar">
    <div class="navbar-right">
        <?php if($user_logged_in): ?>
            <p class="username"><?php echo $user_data['username']; ?></p>
            <a href="logout.php" class="logout">Logout</a>
        <?php else: ?>
            <a href="login.php" class="login">Login</a>
        <?php endif; ?>
    </div>
</div>

 
       
    <div class="container">
        
        
        <div class="button-container">
            <button class="action-button" onclick="location.href='AddBook.php';">Add Book</button>
            <button class="action-button" onclick="location.href='Book.php';">Book Info</button>
            <button class="action-button" onclick="location.href='UserInfo.php';">User Info</button>
        </div>
    </div>
</body>
</html>


