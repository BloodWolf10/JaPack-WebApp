<?php
// Mocking the $package array to simulate package data.
// Replace this with actual package data fetching logic, e.g., from a database or session.
$package = [
    'id' => 1,
    'customerid' => 101,
    'packageType' => 'Standard',
    'packageValue' => '100',
    'packageDescription' => 'Standard package description',
    'numberOfItems' => 5,
    'createdOn' => '2024-12-01',
    'updatedOn' => '2024-12-01',
    'packageStatus' => 'Active',
    'seller' => 'John Doe',
    'pickupaddress' => '123 Pickup St.',
    'dropoffaddress' => '456 Dropoff St.'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <title>Admin Edit Package</title>
    <link href="CSS/theme.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="p-3"> Admin Edit Package</h1>

<div class="container">

    <form action="adminEditSavePackage.php" method="post">
        <!-- Hidden Fields for Package Data -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($package['id']); ?>" />
        <input type="hidden" name="customerid" value="<?= htmlspecialchars($package['customerid']); ?>" />
        <input type="hidden" name="packageType" value="<?= htmlspecialchars($package['packageType']); ?>" />
        <input type="hidden" name="packageValue" value="<?= htmlspecialchars($package['packageValue']); ?>" />
        <input type="hidden" name="packageDescription" value="<?= htmlspecialchars($package['packageDescription']); ?>" />
        <input type="hidden" name="numberOfItems" value="<?= htmlspecialchars($package['numberOfItems']); ?>" />
        <input type="hidden" name="createdOn" value="<?= htmlspecialchars($package['createdOn']); ?>" />
        <input type="hidden" name="updatedOn" value="<?= htmlspecialchars($package['updatedOn']); ?>" />
        <input type="hidden" name="seller" value="<?= htmlspecialchars($package['seller']); ?>" />
        <input type="hidden" name="pickupaddress" value="<?= htmlspecialchars($package['pickupaddress']); ?>" />
        <input type="hidden" name="dropoffaddress" value="<?= htmlspecialchars($package['dropoffaddress']); ?>" />

        <!-- Status Field -->
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="packageStatus"> Status </label>
                <div class="col-md-6">
                    <input type="text" name="packageStatus" id="packageStatus" class="form-control input-sm" value="<?= htmlspecialchars($package['packageStatus']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <!-- Update Button -->
        <div class="row p-2">
            <div class="col-md-2">
                <button class="btn btn-success"> Update Package Status </button>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
