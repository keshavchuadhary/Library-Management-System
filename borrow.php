<?php
session_start();
include("connection.php");
include("function.php");

// Handle book borrowing logic here
$book_id = $_GET['book_id']; // Get the book ID from the URL parameter

// Example: You can perform the borrowing process here
// For demonstration purposes, let's assume the book is borrowed successfully
$success = true;

// Set session variable to indicate borrowing success if the borrowing process is successful
if ($success) {
    $_SESSION['borrow_success'] = true;
}

// Redirect to home page after borrowing
header("Location: index.php");
exit();