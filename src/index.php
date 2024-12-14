<?php
session_start(); // Must be the first line
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JAPack</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="CSS/theme.css" rel="stylesheet" />
</head>

<body>
<main class="main" id="top">

    <!-- PHP Include for Navigation Bar -->
    <?php include 'navigationbar.php'; ?>

    <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url('./Images/gallery/hero-header-bg.png');background-position:top center;background-size:cover;">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-xl-6 col-xxl-7 text-end">
                    <img class="pt-7 pt-md-0 w-100" src="./Images/illustrations/hero.png" alt="hero-header" />
                </div>
                <div class="col-md-7 col-xl-6 col-xxl-5 text-md-start text-center py-8">
                    <h1 class="fw-normal fs-6 fs-xxl-7"> AN EFFICIENT DELIVERY SYSTEM JUST FOR YOU!</h1>
                    <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">Trusted & Proven</h1>
                    <p class="fs-1 mb-5">Whether it's at home, work or in another parish! <br />Speed, Precision, Reliability - We Deliver It All.</p>
                    <a class="btn btn-primary me-2" href="userRegister.php" role="button">Register<i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-7 container-xl">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
                <h5 class="text-danger">SERVICES OFFERED</h5>
            </div>
        </div>

        <!-- Example Service Cards in a Horizontal Layout -->
        <div class="row d-flex flex-row justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="./Images/icons/services-1.svg" alt="International Shopping" />
                            <h5 class="my-4">International Shopping</h5>
                        </div>
                        <p>Delivery from the US to all parishes of Jamaica within 2 weeks.</p>
                        <div class="text-center my-5">
                            <a href="services.php"><button class="btn btn-outline-danger">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="./Images/icons/services-1.svg" alt="Local Shopping" />
                            <h5 class="my-4">Local Shopping</h5>
                        </div>
                        <p>Need help getting products from other parishes? </p>
                        <div class="text-center my-5">
                            <a href="services.php"><button class="btn btn-outline-danger">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="./Images/icons/services-1.svg" alt="Delivery Services" />
                            <h5 class="my-4">Delivery Services</h5>
                        </div>
                        <p>We make it easy for you to order online and get whatever you need, fast.</p>
                        <div class="text-center my-5">
                            <a href="services.php"><button class="btn btn-outline-danger">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
                <div class="card h-100 px-lg-5 card-span">
                    <div class="card-body d-flex flex-column justify-content-around">
                        <div class="text-center pt-5">
                            <img class="img-fluid" src="./Images/icons/services-1.svg" alt="Bulk Delivery" />
                            <h5 class="my-4">Bulk Delivery</h5>
                        </div>
                        <p>We grant you the possibility to send high volume packages with our Bulk Delivery service.</p>
                        <div class="text-center my-5">
                            <a href="services.php"><button class="btn btn-outline-danger">Learn more</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
<img src="./Images/gallery/aboutus.png" alt="qrcode" style="width:20%;height:auto; margin-left: 40%;" />    
</section>
<?php
// Include the PHP QR Code library
require_once 'vendor/autoload.php';  // Correctly loading the Composer autoloader

// Use the correct namespace
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

// Data to be encoded in the QR code
$data = 'http://localhost/aboutus.php';

// Path to save the generated QR code image
$file = './Images/gallery/aboutus.png';

// QR code options (optional)
$options = new QROptions([
    'version'    => 5,              // QR code version (1-40)
    'eccLevel'   => QRCode::ECC_L,  // Error correction level (L, M, Q, H)
    'outputType' => 'png',          // Output type (use 'png', 'jpg', etc.)
    'scale'      => 10,             // Size of the QR code
]);

// Generate the QR code and save it as an image file
$qrcode = new QRCode($options);
$qrcode->render($data, $file);

// Output success message
//echo 'QR code has been generated and saved as: ' . $file;
?>


    <!-- PHP Include for Footer -->
    <?php include 'footer.php'; ?>
</main>

<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>
