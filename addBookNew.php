<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $bookId = $_POST['book'];
    $username = $_SESSION['username'];
    $sql = "INSERT INTO borrow_books (book_id, username) VALUES ('$bookId', '$username')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '
        <script>
        alert("Book added successfully");
        window.location.href = "index.php";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Error");
        </script>
        ';
    }
}
?>
