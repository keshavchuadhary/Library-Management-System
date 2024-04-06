<?php
// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    // Get the 'id' parameter from the URL
    $id = $_GET['id'];

    // Establish a database connection (assuming you've included connection.php)
    include("connection.php");

    // Prepare the delete query
    $sql = "DELETE FROM books WHERE id = $id";

    // Execute the delete query
    if(mysqli_query($conn, $sql)) {
        // If deletion is successful, display success message and redirect
        echo "<script>alert('Record deleted successfully!');</script>";
        echo "<script>window.location.href = 'Book.php';</script>";
        exit(); // Ensure script execution stops after the redirect
    } else {
        // If deletion fails, display an error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If 'id' parameter is not set, display an error message
    echo "<script>alert('No ID specified.');</script>";
}

