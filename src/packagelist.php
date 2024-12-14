<?php include 'navigationbar.php'; ?>


<?php
// Include the database connection
require 'db.php';

// Initialize $userList as an empty array
$userList = [];

try {
    // Fetch data from the database
    $sql = "SELECT * FROM user_package";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $packageList = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
} catch (PDOException $e) {
    echo "Error fetching users: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>

 

    <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
        </div>
    </section>

    <div class="container">
        <h1 class="p-3">Package List</h1>
        <table class="table table-striped table-bordered table-hover">
            <tr class="table-dark">
                <th>Package ID</th>
                <th>Package Type</th>
                <th>Package Value</th>
                <th>Description</th>
                <th>Number of Items</th>
                <th>Date Created</th>
               
                <th>Package Status</th>
                <th>Seller</th>
                <th>Pick-Up Address</th>
                <th>Drop-Off Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <!-- PHP Loop to Display Packages -->
            <?php foreach ($packageList as $package): ?>
                <tr>
                    <td><?= htmlspecialchars($package['id']) ?></td>
                    <td><?= htmlspecialchars($package['packageType']) ?></td>
                    <td><?= htmlspecialchars($package['packageValue']) ?></td>
                    <td><?= htmlspecialchars($package['packageDescription']) ?></td>
                    <td><?= htmlspecialchars($package['numberOfItems']) ?></td>
                    <td><?= htmlspecialchars($package['createdOn']) ?></td>
                    
                    <td><?= htmlspecialchars($package['packageStatus']) ?></td>
                    <td><?= htmlspecialchars($package['seller']) ?></td>
                    <td><?= htmlspecialchars($package['pickupaddress']) ?></td>
                    <td><?= htmlspecialchars($package['dropoffaddress']) ?></td>

                    <!-- Edit and Delete Buttons -->
                    <td>
                        <a href="editPackage.php?id=<?= urlencode($package['id']) ?>" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="deletePackage.php?id=<?= urlencode($package['id']) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <!-- Add New Package Button -->
        <a href="packageRegister.php" class="btn btn-primary btn-block">Add New Package</a>

        <!-- Back to Dashboard Button -->
        <a href="adminDashboard.php" class="btn btn-primary btn-block">Back To Dashboard</a>
    </div>
     
    <br>
    <br>
    <br>
    <div class="container">
    <h1>Upload a CSV File</h1>
    <form action="uploadscript.php" method="POST" enctype="multipart/form-data">
        <label for="csvFile">Choose CSV file:</label>
        <input type="file" name="csvFile" id="csvFile" accept=".csv" required>
        <br><br>
        <button type="submit">Upload and Import</button>
    </form>
    </div>
    <!-- Include Footer Navigation Bar -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
