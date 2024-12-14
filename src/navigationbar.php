<?php
session_start(); // Start the session to check login status

$homeLink = '/';
$servicesLink = '/services.php';
$aboutUsLink = '/aboutus.php';
$loginLink = '/login.php';
$registerLink = '/userRegister.php';
$contactUsLink = '/contactus.php';
$dashboardLink = '/adminDashboard.php'; // Define the dashboard link
$logoPath = 'Images/gallery/JPack-Logo.png'; 

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);
$logoutLink = '/logout.php'; // Define the logout link
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $homeLink; ?>">
            <img src="<?php echo $logoPath; ?>" height="95" alt="logo" />
        </a>
        <!-- Button for burger menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="<?php echo $homeLink; ?>">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="<?php echo $servicesLink; ?>">Our Services</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="<?php echo $aboutUsLink; ?>">About Us</a></li>
                <?php if ($isLoggedIn): ?>
                    <!-- User is logged in, show dashboard link -->
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo $dashboardLink; ?>">Dashboard</a>
                    </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if ($isLoggedIn): ?>
                    <!-- User is logged in, show logout link -->
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo $logoutLink; ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <!-- User is not logged in, show login and register links -->
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo $loginLink; ?>">Login</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="<?php echo $registerLink; ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
            <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="<?php echo $contactUsLink; ?>">Contact Us</a>
        </div>
    </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
