<?php

require_once 'services/UserPackageService.php';
require_once 'services/UserService.php';

class UserPackageController
{
    private $userPackageService;
    private $userService;

    public function __construct()
    {
        $this->userPackageService = new UserPackageService();
        $this->userService = new UserService();
    }

    public function showPackageRegistrationForm()
    {
        $userPackage = null; // Equivalent of creating a new UserPackageEntity
        include 'views/PackageRegistrationForm.php';
    }

    public function registerPackage($customerId, $userPackage)
    {
        try {
            if ($this->userService->isValidId($customerId)) {
                $this->userPackageService->registerPackage($userPackage);
                header('Location: /index.php?action=userPackageListing');
                exit;
            } else {
                header('Location: /index.php?action=errorRP');
                exit;
            }
        } catch (Exception $e) {
            header('Location: /index.php?action=errorRP');
            exit;
        }
    }

    public function getAllPackages()
    {
        $packages = $this->userPackageService->getAllPackages();
        include 'views/PackageList.php'; // Pass $packages to the view
    }

    public function deletePackage($id)
    {
        $this->userPackageService->deletePackage($id);
        header('Location: /index.php?action=packages');
        exit;
    }

    public function editPackage($id)
    {
        $package = $this->userPackageService->getPackageById($id);
        include 'views/EditPackage.php'; // Pass $package to the view
    }

    public function editSavePackage($userPackage)
    {
        $this->userPackageService->registerPackage($userPackage);
        header('Location: /index.php?action=packages');
        exit;
    }

    public function userPackageListing()
    {
        $packages = $this->userPackageService->getAllPackages();
        include 'views/UserPackageList.php'; // Pass $packages to the view
    }

    public function registerRedirect()
    {
        include 'views/PackageRegisterRedirect.php';
    }
}
