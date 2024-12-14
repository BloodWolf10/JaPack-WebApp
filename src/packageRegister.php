<?php include 'navigationbar.php'; ?> <!-- Include your navigation bar here -->

<?php
// You may include any necessary PHP files, such as a session check or database connections
// For example, you can include navigation and other necessary files.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/theme.css" rel="stylesheet">
</head>
<body>

<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $packageType = trim($_POST['packageType']);
    $packageValue = trim($_POST['packageValue']);
    $packageDescription = trim($_POST['packageDescription']);
    $numberOfItems = trim($_POST['numberOfItems']);
    $packageStatus = trim($_POST['packageStatus']);
    $seller = trim($_POST['seller']);
    $pickupaddress = trim($_POST['pickupaddress']);
    $dropoffaddress = trim($_POST['dropoffaddress']);

    // Insert data into the database
    $sql = "INSERT INTO user_package (packageType, packageValue, packageDescription, numberOfItems, packageStatus, seller, pickupaddress, dropoffaddress) 
            VALUES (:packageType, :packageValue, :packageDescription, :numberOfItems, :packageStatus, :seller, :pickupaddress, :dropoffaddress)";
    
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            'packageType' => $packageType,
            'packageValue' => $packageValue,
            'packageDescription' => $packageDescription,
            'numberOfItems' => $numberOfItems,
            'packageStatus' => $packageStatus,
            'seller' => $seller,
            'pickupaddress' => $pickupaddress,
            'dropoffaddress' => $dropoffaddress,
        ]);
        
        echo "Package registration successful!";
        header("Location: regSuccessful.php");
    } catch (\PDOException $e) {
        if ($e->getCode() == 23000) {
            echo "Error: Duplicate entry (e.g., package already exists).";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>



<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<!--FORM-->
<div class="container">

<h1 class="p-3">Package Registration</h1>

<form action="packroute.php?action=store" method="post">
    <div class="form-group">
        <label for="customerid">Customer ID:</label>
        <input type="number" id="customerid" name="customerid" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="packageType">Package Type:</label>
        <input type="text" id="packageType" name="packageType" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="packageStatus">Package Status:</label>
        <select id="packageStatus" name="packageStatus" class="form-control" required>
            <option value="Pending">Pending</option>
            <option value="Shipped">Shipped</option>
            <option value="Delivered">Delivered</option>
        </select>
    </div>

    <div class="form-group">
        <label for="packageValue">Package Value:</label>
        <input type="text" id="packageValue" name="packageValue" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="packageDescription">Package Description:</label>
        <input type="text" id="packageDescription" name="packageDescription" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="numberOfItems">Number of Items:</label>
        <input type="text" id="numberOfItems" name="numberOfItems" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="seller">Seller:</label>
        <input type="text" id="seller" name="seller" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="pickupaddress">Pick-Up Address:</label>
        <input type="text" id="pickupaddress" name="pickupaddress" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="dropoffaddress">Drop-Off Address:</label>
        <input type="text" id="dropoffaddress" name="dropoffaddress" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Register Package</button>
    <a href="packagelist.php?action=index" class="btn btn-secondary">Cancel</a>
</form>

</div>
<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
