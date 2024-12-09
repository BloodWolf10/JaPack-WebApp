<?php

require_once 'services/AdminService.php';
require_once 'services/UserService.php';

class LoginController
{
    private $adminService;
    private $userService;

    public function __construct()
    {
        $this->adminService = new AdminService();
        $this->userService = new UserService();
    }

    public function showLoginForm()
    {
        include 'views/Login.php';
    }

    public function login($username, $password)
    {
        try {
            if ($this->adminService->isValidAdmin($username, $password)) {
                // Admin login successful
                header('Location: /adashboard');
                exit;
            } elseif ($this->userService->isValidUser($username, $password)) {
                // User login successful
                header('Location: /udashboard');
                exit;
            } else {
                // Invalid credentials
                $error = "Invalid username or password";
                include 'views/ErrorLogin.php';
            }
        } catch (Exception $e) {
            // Handle unexpected errors
            $error = "An unexpected error occurred. Please try again.";
            include 'views/ErrorLogin.php';
        }
    }

    public function elogin()
    {
        include 'views/ErrorLogin.php';
    }
}
