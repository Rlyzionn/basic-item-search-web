<?php
// Start the session to access session variables
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page (change the URL to your actual login page)
header("Location: login.php");
exit();
?>
