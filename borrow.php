<?php
session_start(); // Ensure session is started

include("connection.php");

$msg = '';

if(isset($_POST['submit'])){
    $Title = $_POST['book_id'];
    $Author = $_POST['title'];
    $ISBN = $_POST['available'];
    $Genre = $_POST['borrowed_by'];

    $sql = "INSERT INTO `borrow-books`(`book_id`, `title`, `available`, `borrowed_by`) VALUES (NULL, '$title', '$available', '$borrowed_by')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If successful, set success message
        $msg = 'New book borrowed successfully!';
        // Redirect to admin.php after displaying the success message
        header("Location:index.php");
        exit(); // Ensure that script execution stops after the redirect
    } else {
        // If failed, set error message
        $msg = 'Failed to borrow  book!';
    }
}

// Display the alert message
echo "<script>alert('$msg');</script>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow</title>
    <link rel="stylesheet" href="css/addbook.css"/>
    
</head>
<body>
    <header>
        <h1>Fill Up To Borrow Book</h1>
    </header>
    <nav class="navbar">
        <h2>Books Info</h2>
        <a href="index.php">HOME</a>
    </nav>
    

    <div class="container">
        <div class="text">
            <h3>BORROW BOOK</h3>
            <p class="text">Complete the form below to borrow book.</p>
            <form action="borrow.php" method="POST">
        
        <label for="borrow_date">Borrow Date:</label>
        <input type="date" id="borrow_date" name="borrow_date" required>
        <br>
        <label for="return_date">Return Date:</label>
        <input type="date" id="return_date" name="return_date" required>
        <br>
        <input type="submit" value="Borrow Book">
    </form>
        </div>
    </div>


</body>
</html>
