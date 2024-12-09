<?php
// You may include any necessary PHP files, such as a session check or database connections
// For example, you can include navigation and other necessary files.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package Registration</title>
    <link href="CSS/theme.css" rel="stylesheet">
</head>
<body>

<!-- Include Navigation Bar (assuming you have a file called LoginUserNavBar.php for the navbar) -->
<?php include('LoginUserNavBar.php'); ?> <!-- Include your navigation bar here -->

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<!--FORM-->
<div class="container">

<h1 class="p-3">Package Registration</h1>

<form action="registerPackage.php" method="post">
    <div class="row">
        <div class="form-group col-md-12">
            <label for="customerid">Customer ID:</label>
            <div class="col-md-6">
                <input type="number" id="customerid" name="customerid" required><br><br>
            </div>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="packageType">Package Type:</label>
            <div class="col-md-6">
                <input type="text" id="packageType" name="packageType" required><br><br>
            </div>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="packageValue">Package Value:</label>
            <div class="col-md-6">
                <input type="text" id="packageValue" name="packageValue" required><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="packageDescription">Package Description:</label>
            <div class="col-md-6">
                <input type="text" id="packageDescription" name="packageDescription" required><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="numberOfItems">Number of Items:</label>
            <div class="col-md-6">
                <input type="text" id="numberOfItems" name="numberOfItems" required><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="seller">Seller:</label>
            <div class="col-md-6">
                <input type="text" id="seller" name="seller" required><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="pickupaddress">Pick-Up Address:</label>
            <div class="col-md-6">
                <input type="text" id="pickupaddress" name="pickupaddress" required><br><br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="dropoffaddress">Drop-Off Address:</label>
            <div class="col-md-6">
                <input type="text" id="dropoffaddress" name="dropoffaddress" required><br><br>
            </div>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-md-2">
            <button type="submit">Register Package</button>
        </div>
    </div>
</form>

</div>

</body>
</html>
