<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>

<!-- Include the admin navigation bar -->
<?php include('adminNavBar.php'); ?>

<br/><br/><br/><br/>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

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
                            <h5 class="my-4">View Admins</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="getAdmins.php"><button class="btn btn-outline-danger" type="button">View Admin List</button></a>
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
                                <a href="getUserList.php"><button class="btn btn-outline-danger" type="button">View User List</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <!-- View Packages Card -->
        <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="Images/icons/services-1.svg" alt="View Packages" />
                            <h5 class="my-4">View Packages</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="statusPackages.php"><button class="btn btn-outline-danger" type="button">View Packages List</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include the footer navigation bar -->
<?php include('footer.php'); ?>

</body>
</html>
