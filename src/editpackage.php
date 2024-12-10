<!DOCTYPE html>
< lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Package</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
 <br>
<body>
<?php include 'navigationbar.php'; ?>
<?php
// Include the database connection
require 'db.php';

// Check if the id is provided in the query string
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $packageId = intval($_GET['id']);

    try {
        // Fetch user details from the database
        $sql = "SELECT * FROM user_package WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $packageId]);
        $package = $stmt->fetch(PDO::FETCH_ASSOC);

        // If user not found, handle the error
        if (!$package) {
            echo "<p>User not found.</p>";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error fetching user: " . $e->getMessage();
        exit;
    }
} else {
    echo "<p>Invalid or missing user ID.</p>";
    exit;
}
?>


<h1 class="p-3"> Edit Package</h1>

<div class="container">

<form action="packroute.php?action=update&id=<?php echo $package['id']; ?>" method="POST">

        <div class="form-group col-md-12">
            <div class="col-md-6">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($package['id']); ?>" class="form-control" />
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
                <button type=submit class="btn btn-success"> Update </button>
                <a href="packagelist.php?action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Footer NAV BAR -->
<?php include 'footer.php'; ?>
</body>
</html>
