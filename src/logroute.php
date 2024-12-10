<?php
require_once './controllers/LoginController.php'; // Include the controller

// Instantiate the controller and handle the login
$controller = new LoginController();
$controller->login();
?>