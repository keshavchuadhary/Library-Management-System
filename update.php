<?php
session_start(); // Ensure session is started

include("connection.php");
$id = $_GET['id'];


if(isset($_POST['submit'])){
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $ISBN = $_POST['ISBN'];
    $Genre = $_POST['Genre'];

    $sql = "UPDATE `books` SET `Title`='$Title',`Author`='$Author',`ISBN`='$ISBN',`Genre`='$Genre' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Record updated successfully!');</script>";
        echo "<script>window.location.href = 'Book.php';</script>";
        exit(); // Ensure that script execution stops after the redirect
    } else {
        echo "Error: " . mysqli_error($conn);
        
    }
    
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/addbook.css"/>
    <style>
        /* Styling for the pop-up notification */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 2px solid #ccc;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: <?php echo $msg ? 'block' : 'none'; ?>; /* Display pop-up if message is set */
            z-index: 9999;
        }
    </style>
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
            <h3>EDIT BOOK</h3>
            <p class="text">Complete the form below to Edit book.</p>
            <?php
            
            $sql = "SELECT * FROM books WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);

            ?>
            <form action="#" method="post" class="book-form">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="Title" value="<?php echo $row['Title'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" id="author" name="Author" value="<?php echo $row['Author'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" id="isbn" name="ISBN"  value="<?php echo $row['ISBN'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <input type="text" id="genre" name="Genre" value="<?php echo $row['Genre'] ?>" required>
                </div>
                <button type="submit" name="submit">Update</button>
            </form>
        </div>
    </div>


</body>
</html>
