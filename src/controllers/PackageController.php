<?php

require_once 'model/packagemodel.php'; // Include the Package model

class PackageController
{
    private $packageModel;

    public function __construct()
    {
        $this->packageModel = new PackageModel(); // Initialize the model
    }

    // List all packages
    public function routing()
    {
        $packages = $this->packageModel->getAllPackages();
        include 'packagelist.php'; // Pass data to the view
    }

    // Show package creation form
    public function create()
    {
        include 'packageRegister.php'; // Show the form to create a new package
    }

    // Save a new package
    public function store()
    {
        // Check if all POST data is set to prevent warnings
        if (
            isset($_POST['packageType']) && isset($_POST['packageValue']) && isset($_POST['packageDescription']) &&
            isset($_POST['numberOfItems']) && isset($_POST['packageStatus']) && isset($_POST['seller']) &&
            isset($_POST['pickupaddress']) && isset($_POST['dropoffaddress'])
        ) {
            $data = [
                'packageType' => $_POST['packageType'],
                'packageValue' => $_POST['packageValue'],
                'packageDescription' => $_POST['packageDescription'],
                'numberOfItems' => $_POST['numberOfItems'],
                'packageStatus' => $_POST['packageStatus'],
                'seller' => $_POST['seller'],
                'pickupaddress' => $_POST['pickupaddress'],
                'dropoffaddress' => $_POST['dropoffaddress']
            ];

            if ($this->packageModel->createPackage($data)) {
                // Ensure no output before header
                header('Location: packagelist.php?action=index');
                exit(); // Prevent further script execution after redirect
            } else {
                echo "Error: Unable to create package.";
            }
        } else {
            echo "Error: Missing form fields.";
        }
    }

    // Show edit form for a specific package
    public function edit($id)
    {
        $package = $this->packageModel->getPackageById($id);
        if ($package) {
            include 'editpackage.php'; // Pass the package to the edit form
        } else {
            echo "Package not found.";
        }
    }

    // Update an existing package
    public function update($id)
    {
        // Check if all POST data is set to prevent warnings
        if (
            isset($_POST['packageType']) && isset($_POST['packageValue']) && isset($_POST['packageDescription']) &&
            isset($_POST['numberOfItems']) && isset($_POST['packageStatus']) && isset($_POST['seller']) &&
            isset($_POST['pickupaddress']) && isset($_POST['dropoffaddress'])
        ) {
            $data = [
                'id' => $id,
                'packageType' => $_POST['packageType'],
                'packageValue' => $_POST['packageValue'],
                'packageDescription' => $_POST['packageDescription'],
                'numberOfItems' => $_POST['numberOfItems'],
                'packageStatus' => $_POST['packageStatus'],
                'seller' => $_POST['seller'],
                'pickupaddress' => $_POST['pickupaddress'],
                'dropoffaddress' => $_POST['dropoffaddress']
            ];

            if ($this->packageModel->updatePackage($data)) {
                // Ensure no output before header
                header('Location: packagelist.php?action=index');
                exit(); // Prevent further script execution after redirect
            } else {
                echo "Error: Unable to update package.";
            }
        } else {
            echo "Error: Missing form fields for update.";
        }
    }

    // Delete a package
    public function delete($id)
    {
        try {
            if ($this->packageModel->deletePackage($id)) {
                // Ensure no output before header
                header('Location: packagelist.php?action=index');
                exit(); // Prevent further script execution after redirect
            } else {
                echo "Error: Unable to delete package.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
