<?php
session_start(); // Start session

// Clear session variables
$_SESSION = array();

// Destroy session
session_destroy();

// Redirect user to the login page
header("Location: login.html");
exit;
?>