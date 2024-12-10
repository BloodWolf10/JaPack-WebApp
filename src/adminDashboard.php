<?php
session_start(); // Start session before any output

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit;
}

// Continue with the dashboard
echo "Welcome, " . $_SESSION['email'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>



<!-- Include the admin navigation bar -->
<?php include('navigationbar.php'); ?>

<br/><br/><br/><br/>


<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
                <h5 class="text-danger">CHOOSE ACTION</h5>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- View Admins Card -->
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="Images/icons/services-1.svg" alt="View Admins" />
                            <h5 class="my-4">View Packages</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="packagelist.php"><button class="btn btn-outline-danger" type="button">View Packages</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Users Card -->
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="Images/icons/services-1.svg" alt="View Users" />
                            <h5 class="my-4">View Users</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="viewusers.php"><button class="btn btn-outline-danger" type="button">View Users</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        
    </div>
</section>

<!-- Include the footer navigation bar -->
<?php include('footer.php'); ?>

</body>
</html>
