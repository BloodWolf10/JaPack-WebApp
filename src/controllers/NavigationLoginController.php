<?php

require_once 'services/AdminService.php';
require_once 'services/UserService.php';

class NavigationLoginController
{
    private $adminService;
    private $userService;

    public function __construct()
    {
        $this->adminService = new AdminService();
        $this->userService = new UserService();
    }

    public function aboutUs()
    {
        include 'views/AboutUs.php';
    }

    public function navServices()
    {
        include 'views/Services.php';
    }

    public function contactUs()
    {
        include 'views/ContactUs.php';
    }

    public function home()
    {
        include 'views/Index.php';
    }

    public function levelChecker()
    {
        include 'views/Level.php';
    }

    public function loginChecker()
    {
        include 'views/LoginLevel.php';
    }

    public function splashPage()
    {
        include 'views/SplashPage.php';
    }

    public function showLoginForm()
    {
        include 'views/Login.php';
    }

    public function login($username, $password)
    {
        try {
            if ($this->adminService->isValidAdmin($username, $password)) {
                header('Location: /adashboard');
                exit;
            } elseif ($this->userService->isValidUser($username, $password)) {
                header('Location: /udashboard');
                exit;
            } else {
                $error = "Invalid username or password";
                include 'views/Login.php'; // Pass the error to the login view
            }
        } catch (Exception $e) {
            $error = "An unexpected error occurred. Please try again.";
            include 'views/ErrorLogin.php'; // Pass the error to the error login view
        }
    }

    public function elogin()
    {
        include 'views/ErrorLogin.php';
    }
}
