<?php

require_once 'services/AdminService.php';
require_once 'services/UserService.php';
require_once 'services/UserPackageService.php';

class AdminController
{
    private $adminService;
    private $userService;
    private $userPackageService;

    public function __construct()
    {
        $this->adminService = new AdminService();
        $this->userService = new UserService();
        $this->userPackageService = new UserPackageService();
    }

    public function getAdmins()
    {
        $adminList = $this->adminService->getAllAdmins();
        include 'views/ViewAdmins.php'; // Pass $adminList to the view
    }

    public function adminRegister()
    {
        $admin = null; // Placeholder for new admin
        include 'views/AdminRegister.php';
    }

    public function saveAdmin($data)
    {
        $this->adminService->addAdmin($data);
        header('Location: /login');
    }

    public function editAdmin($id)
    {
        $admin = $this->adminService->getAdminById($id);
        include 'views/EditAdmin.php'; // Pass $admin to the view
    }

    public function editSaveAdmin($data)
    {
        $this->adminService->addAdmin($data);
        header('Location: /getAdmins');
    }

    public function deleteAdmin($id)
    {
        $this->adminService->deleteAdmin($id);
        header('Location: /getAdmins');
    }

    public function adashboard()
    {
        include 'views/AdminDashboard.php';
    }

    public function getUsers()
    {
        $userList = $this->userService->getAllUsers();
        include 'views/ViewUsers.php'; // Pass $userList to the view
    }

    public function getAllPackages()
    {
        $packages = $this->userPackageService->getAllPackages();
        include 'views/PackageList.php'; // Pass $packages to the view
    }

    public function adminEditSavePackage($data)
    {
        $this->userPackageService->registerPackage($data);
        header('Location: /statusPackages');
    }

    public function adminEditPackage($id)
    {
        $package = $this->userPackageService->getPackageById($id);
        include 'views/AdminEditPackage.php'; // Pass $package to the view
    }

    public function statusPackages()
    {
        $packages = $this->userPackageService->getAllPackages();
        include 'views/AdminPackageList.php'; // Pass $packages to the view
    }
}
