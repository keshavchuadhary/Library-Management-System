<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Books</title>
    <link rel="stylesheet" href="Book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  

    <h2>Borrowd Books</h2>

    <table>
    <tr>
        <th>ID</th>
        <th>Book ID</th>
        <th>Username</th>
        
    </tr>
    <?php 
     session_start();
    
        // Connect to the database
        include("connection.php");

        // Select data from the books table
        $result = mysqli_query($conn, "SELECT * FROM borrow_books");

        // Loop through the rows of the result set and display data in the table
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['book_id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            
            // Adding Update and Delete buttons in the Action column
            
        }

        // Close the connection
        mysqli_close($conn);
    ?>
</table>

<a href="admin.php" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; display: block; width: fit-content; margin: 20px auto;">BACK</a>

</body>
</html>
