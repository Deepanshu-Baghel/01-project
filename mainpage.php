<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: check.php");
    exit();
}

// Display the main page content
echo "Welcome, " . $_SESSION['username'];
?>
