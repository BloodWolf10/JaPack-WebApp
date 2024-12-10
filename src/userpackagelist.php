<?php
// Include necessary PHP files such as navigation bar and footer.
include('LoginUserNavBar.php');
include('FooterNavigationBar.php');

// Assuming $packages is an array of package data fetched from a database or session.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
    <link href="CSS/theme.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar -->
<?php include('LoginUserNavBar.php'); ?>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<!-- Container for package list -->
<div class="container">
    <h1 class="p-3">User Package View</h1>
    <table class="table table-bordered">
        <tr>
            <th>Package ID</th>
            <th>Customer ID</th>
            <th>Date Created</th>
            <th>Package Status</th>
        </tr>

        <?php
        // Assuming $packages is an array with package data (you may fetch this from a database)
        foreach ($packages as $package) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($package['id']) . "</td>";
            echo "<td>" . htmlspecialchars($package['customerid']) . "</td>";
            echo "<td>" . htmlspecialchars($package['createdOn']) . "</td>";
            echo "<td>" . htmlspecialchars($package['packageStatus']) . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <button type="button" class="btn btn-primary btn-block">
        <a href="packageRegister.php">Add New Package</a>
    </button>

    <button type="button" class="btn btn-primary btn-block">
        <a href="udashboard.php">Back To Dashboard</a>
    </button>
</div>

<!-- Footer Navigation Bar -->
<?php include('FooterNavigationBar.php'); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
