<?php
// Initialize variables if needed, such as for existing package data (for example, $package).
// You should replace this with your own logic to fetch package data from a database or session.
$package = [
    'id' => 1,
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
    <title>Edit User</title>
    <link href="CSS/theme.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<h1 class="p-3"> Edit Package</h1>

<div class="container">

    <form action="editSavePackage.php" method="post">
        <div class="form-group col-md-12">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?= $package['id']; ?>" class="form-control input-sm" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="packageType"> Type of Package </label>
                <div class="col-md-6">
                    <input type="text" name="packageType" id="packageType" class="form-control input-sm" value="<?= htmlspecialchars($package['packageType']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="packageValue"> Value of Package </label>
                <div class="col-md-6">
                    <input type="text" name="packageValue" id="packageValue" class="form-control input-sm" value="<?= htmlspecialchars($package['packageValue']); ?>" required="required" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="packageDescription"> Package Description </label>
                <div class="col-md-6">
                    <input type="text" name="packageDescription" id="packageDescription" class="form-control input-sm" value="<?= htmlspecialchars($package['packageDescription']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="numberOfItems"> Number of Items in Package </label>
                <div class="col-md-6">
                    <input type="text" name="numberOfItems" id="numberOfItems" class="form-control input-sm" value="<?= htmlspecialchars($package['numberOfItems']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="createdOn"> Package Registration Date </label>
                <div class="col-md-6">
                    <input type="text" name="createdOn" id="createdOn" class="form-control input-sm" value="<?= htmlspecialchars($package['createdOn']); ?>" readonly required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="updatedOn"> Updated Date </label>
                <div class="col-md-6">
                    <input type="text" name="updatedOn" id="updatedOn" class="form-control input-sm" value="<?= htmlspecialchars($package['updatedOn']); ?>" readonly required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="packageStatus"> Package Status </label>
                <div class="col-md-6">
                    <input type="text" name="packageStatus" id="packageStatus" class="form-control input-sm" value="<?= htmlspecialchars($package['packageStatus']); ?>" readonly required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="seller"> Seller </label>
                <div class="col-md-6">
                    <input type="text" name="seller" id="seller" class="form-control input-sm" value="<?= htmlspecialchars($package['seller']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="pickupaddress"> Collection Address </label>
                <div class="col-md-6">
                    <input type="text" name="pickupaddress" id="pickupaddress" class="form-control input-sm" value="<?= htmlspecialchars($package['pickupaddress']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="dropoffaddress"> Deliver Address </label>
                <div class="col-md-6">
                    <input type="text" name="dropoffaddress" id="dropoffaddress" class="form-control input-sm" value="<?= htmlspecialchars($package['dropoffaddress']); ?>" required="required" />
                </div>
            </div>
        </div>
        <br/>

        <div class="row p-2">
            <div class="col-md-2">
                <button class="btn btn-success"> Update </button>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
