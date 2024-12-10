<?php

require_once 'model/loginmodel.php'; // Include the User model
class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel(); // Initialize the model
    }

    // Method to handle the login process
    public function login() {
        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Validate input
            if (empty($email) || empty($password)) {
                $error = 'Username and password are required.';
                include 'adminDashboard.php'; // Display the login page with error
                return;
            }

            // Attempt to authenticate the user
            $user = $this->userModel->getUserByEmail($email); // Calls the method in UserModel

            if ($user && password_verify($password, $user['password'])) {
                // Set session variables if login is successful
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Redirect to the dashboard or home page
                header('Location: adminDashboard.php');
                exit;
            } else {
                // Invalid credentials
                $error = 'Invalid email or password.';
                include 'login.php'; // Display the login page with error
            }
 }
}
}