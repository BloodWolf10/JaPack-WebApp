<?php
// Database configuration
require 'db.php';

// Connect to the database
// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Database connection established.<br>";
// } catch (PDOException $e) {
//     die("Database connection failed: " . $e->getMessage());
// }

// Check if a file is uploaded
if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['csvFile']['tmp_name'];
    $fileName = $_FILES['csvFile']['name'];
    $fileSize = $_FILES['csvFile']['size'];
    $fileType = $_FILES['csvFile']['type'];

    // Check if the file is a CSV
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    if (strtolower($fileExtension) !== 'csv') {
        die("Error: Only CSV files are allowed.");
    }

    // Read the uploaded CSV file
    if (($handle = fopen($fileTmpPath, "r")) !== false) {
        // Read the header row
        $headers = fgetcsv($handle);
        
       // print_r($headers);
        // Prepare the SQL insert statement
        $insertQuery = "
            INSERT INTO user_package
            (packageType, packageValue, packageDescription, numberOfItems,packageStatus, seller, pickupaddress, dropoffaddress) 
            VALUES (:packageType, :packageValue, :packageDescription, :numberOfItems, :packageStatus, :seller, :pickupaddress, :dropoffaddress)
        ";
        $stmt = $pdo->prepare($insertQuery);

        // Read each row and insert into the database
        while (($row = fgetcsv($handle)) !== false) {
            $data = array_combine($headers, $row); // Map headers to row values

            // Execute the query
            $stmt->execute([
               ':packageType' => $data['packageType'],
                ':packageValue' => $data['packageValue'],
                ':packageDescription' => $data['packageDescription'],
                ':numberOfItems' => $data['numberOfItems'],
                ':packageStatus' => $data['packageStatus'],
                ':seller' => $data['seller'],
                ':pickupaddress' => $data['pickupaddress'],
                ':dropoffaddress' => $data['dropoffaddress'],
            ]);
        }

        fclose($handle);
        // echo "File '$fileName' uploaded and data imported successfully.";
        header("Location: /packagelist.php");
    } else {
        echo "Error opening the uploaded file.";
    }
} else {
    echo "Error: No file uploaded or file upload failed.";
}
?>