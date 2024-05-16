<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK INFORMATION</title>
    <link rel="stylesheet" href="Book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  

    <h2>Books Table</h2>

    <table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Genre</th>
        <th>Action</th>
    </tr>
    <?php 
     session_start();
    
        // Connect to the database
        include("connection.php");

        // Select data from the books table
        $result = mysqli_query($conn, "SELECT * FROM books");

        // Loop through the rows of the result set and display data in the table
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Title'] . "</td>";
            echo "<td>" . $row['Author'] . "</td>";
            echo "<td>" . $row['ISBN'] . "</td>";
            echo "<td>" . $row['Genre'] . "</td>";
            // Adding Update and Delete buttons in the Action column
            echo "<td>";
            echo "<button onclick=\"location.href='update.php?id=" . $row['id'] . "'\">Update</button>";
            echo "<button onclick=\"location.href='delete.php?id=" . $row['id'] . "'\">Delete</button>";
            echo "</td>";
            echo "</tr>";
        }

        // Close the connection
        mysqli_close($conn);
    ?>
</table>

<a href="Addbook.php" style="text-decoration: none; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; display: block; width: fit-content; margin: 20px auto;">ADD BOOK</a>

</body>
</html>
