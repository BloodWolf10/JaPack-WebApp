<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="CSS/theme.css" rel="stylesheet" />

</head>
<body>

<!-- Include the user navigation bar -->
<?php include('userNavBar.php'); ?>

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

        <!-- Package Pre-Alert Card -->
        <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="Images/icons/services-1.svg" alt="Package Pre-Alert" />
                            <h5 class="my-4">Package Pre-Alert</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="registerPackage.php"><button class="btn btn-outline-danger" type="button">Create Package</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Check Package Status Card -->
        <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="Images/icons/services-1.svg" alt="Check Package Status" />
                            <h5 class="my-4">Check Package Status</h5>
                        </div>
                        <div class="text-center my-5">
                            <div class="d-grid">
                                <a href="userPackageListing.php"><button class="btn btn-outline-danger" type="button">View Package Queue</button></a>
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
