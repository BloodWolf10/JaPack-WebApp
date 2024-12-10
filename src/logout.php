<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the homepage or login page after logging out
header('Location: /');
exit;
?>