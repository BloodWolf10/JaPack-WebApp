<?php

$homeLink = '/';
$servicesLink = '/services.php';
$aboutUsLink = '/aboutus.php';
$loginLink = '/login.php';
$registerLink = '/userRegister.php';
$contactUsLink = '/contactus.php';
$logoPath = 'Images/gallery/JPack-Logo.png'; 

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $homeLink; ?>">
            <img src="<?php echo $logoPath; ?>" height="95" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?php echo $homeLink; ?>">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="<?php echo $servicesLink; ?>">Our Services</a></li>
                <!-- <li class="nav-item px-2"><a class="nav-link" href="<?php echo $findUsLink; ?>">Find Us</a></li> -->
                <li class="nav-item px-2"><a class="nav-link" href="<?php echo $aboutUsLink; ?>">About Us</a></li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo $loginLink; ?>">Login</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="<?php echo $registerLink; ?>">Register</a>
                </li>
            </ul>
            <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="<?php echo $contactUsLink; ?>">Contact Us</a>
        </div>
    </div>
</nav>
