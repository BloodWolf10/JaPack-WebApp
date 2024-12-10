<?php

class PackageModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=japackdb', 'php_docker', 'RootSQL1010');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Fetch all packages
    public function getAllPackages()
    {
        $stmt = $this->pdo->query("SELECT * FROM user_package");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fetch a single package by ID
    public function getPackageById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user_package WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Create a new package
    public function createPackage($data)
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO user_package
            (packageType, packageValue, packageDescription, numberOfItems,packageStatus, seller, pickupaddress, dropoffaddress) 
            VALUES (:packageType, :packageValue, :packageDescription, :numberOfItems, :packageStatus, :seller, :pickupaddress, :dropoffaddress)
        ");
        return $stmt->execute($data);
    }

    // Update an existing package
    public function updatePackage($data)
    {
        $stmt = $this->pdo->prepare("
            UPDATE user_package 
            SET packageType = :packageType, 
                packageValue = :packageValue, 
                packageDescription = :packageDescription, 
                numberOfItems = :numberOfItems, 
                packageStatus = :packageStatus, 
                seller = :seller, 
                pickupaddress = :pickupaddress, 
                dropoffaddress = :dropoffaddress,
                updatedOn = NOW()
            WHERE id = :id
        ");
        return $stmt->execute($data);
    }

    // Delete a package
    public function deletePackage($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM user_package WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }

    // Fetch packages by status
    public function getPackagesByStatus($status)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user_package WHERE packageStatus = :status");
        $stmt->execute(['status' => $status]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
