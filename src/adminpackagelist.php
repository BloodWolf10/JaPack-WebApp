<?php
// Simulating a list of packages in PHP (you would fetch this data from a database)
$packages = [
    [
        'id' => 1,
        'customerid' => 101,
        'packageType' => 'Standard',
        'packageValue' => '100',
        'packageDescription' => 'Standard Package',
        'numberOfItems' => 5,
        'createdOn' => '2024-01-01',
        'updatedOn' => '2024-01-10',
        'packageStatus' => 'Active',
        'seller' => 'John Doe',
        'pickupaddress' => '123 Pickup St.',
        'dropoffaddress' => '456 Dropoff St.'
    ],
    // Add more packages as needed
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
    <!-- Stylesheets -->
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>

<!-- Navigation bar -->
<nav><!-- Include navigation content here --></nav>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<div class="container">
    <h1 class="p-3">Package List</h1>
    <table class="table table-bordered">
        <tr>
            <th>Package ID</th>
            <th>Customer ID</th>
            <th>Package Type</th>
            <th>Package Value</th>
            <th>Description</th>
            <th>Number of Items</th>
            <th>Date Created</th>
            <th>Update Package Date</th>
            <th>Package Status</th>
            <th>Seller</th>
            <th>Pick-Up Address</th>
            <th>Drop-Off Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($packages as $package): ?>
            <tr>
                <td><?= htmlspecialchars($package['id']); ?></td>
                <td><?= htmlspecialchars($package['customerid']); ?></td>
                <td><?= htmlspecialchars($package['packageType']); ?></td>
                <td><?= htmlspecialchars($package['packageValue']); ?></td>
                <td><?= htmlspecialchars($package['packageDescription']); ?></td>
                <td><?= htmlspecialchars($package['numberOfItems']); ?></td>
                <td><?= htmlspecialchars($package['createdOn']); ?></td>
                <td><?= htmlspecialchars($package['updatedOn']); ?></td>
                <td><?= htmlspecialchars($package['packageStatus']); ?></td>
                <td><?= htmlspecialchars($package['seller']); ?></td>
                <td><?= htmlspecialchars($package['pickupaddress']); ?></td>
                <td><?= htmlspecialchars($package['dropoffaddress']); ?></td>

                <td>
                    <button type="button" class="btn btn-success">
                        <a href="adminEditPackage.php?id=<?= $package['id']; ?>">Update Status</a>
                    </button>
                </td>

                <td>
                    <button type="button" class="btn btn-danger">
                        <a href="deletePackage.php?id=<?= $package['id']; ?>">Delete</a>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Add New Package Button -->
    <button type="button" class="btn btn-primary btn-block">
        <a href="registerPackage.php">Add New Package</a>
    </button>

    <!-- Back to Dashboard Button -->
    <button type="button" class="btn btn-primary btn-block">
        <a href="adashboard.php">Back To Dashboard</a>
    </button>
</div>

<!-- Footer -->
<nav><!-- Include footer content here --></nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
