<?php
session_start(); // Ensure session is started

include("connection.php");

$msg = '';

if(isset($_POST['submit'])){
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $ISBN = $_POST['ISBN'];
    $Genre = $_POST['Genre'];

    $sql = "INSERT INTO `books`(`id`, `Title`, `Author`, `ISBN`, `Genre`) VALUES (NULL, '$Title', '$Author', '$ISBN', '$Genre')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // If successful, set success message
        $msg = 'New record created successfully!';
        // Redirect to admin.php after displaying the success message
        header("Location: Book.php");
        exit(); // Ensure that script execution stops after the redirect
    } else {
        // If failed, set error message
        $msg = 'Failed to create new record!';
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
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/addbook.css"/>
    
</head>
<body>
    <header>
        <h1>Welcome Admin</h1>
    </header>
    <nav class="navbar">
        <h2>Books Info</h2>
        <a href="Admin.php">HOME</a>
    </nav>
    

    <div class="container">
        <div class="text">
            <h3>ADD NEW BOOK</h3>
            <p class="text">Complete the form below to add new book.</p>
            <form action="#" method="post" class="book-form">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="Title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" id="author" name="Author" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" id="isbn" name="ISBN" required>
                </div>
                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <input type="text" id="genre" name="Genre" required>
                </div>
                <button type="submit" name="submit">Add Book</button>
            </form>
        </div>
    </div>


</body>
</html>
