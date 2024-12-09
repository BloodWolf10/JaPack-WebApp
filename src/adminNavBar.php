
<!---------------------------------------------------------------------------------------->

<!--  NEED TO BE LOOKED AT AND SEE IT CHANGES CAN BE MADE FOR A PROPER IMPLIMENTATION   -->
<!----------  SHOULD BE ABLE TO USE ONE NAVIGATIONBAR TO WORK ACCROSS ALL PAGES ---------->

<!---------------------------------------------------------------------------------------->


<!DOCTYPE html>
<html lang="en">
<!-- NavigationBar.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <!-- Logo and Home Link -->
        <a class="navbar-brand" href="adashboard.php">
            <img src="Images/gallery/JPack-Logo.png" height="95" alt="logo" />
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <!-- Uncomment these links if needed in the future -->
            <!--
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="services.php">Our Services</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="contactUs.php">Find Us</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="aboutUs.php">About Us</a></li>
            </ul>
            -->

            <!-- User Actions -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link" href="login.php">Log Out</a>
                </li>
                <!-- Uncomment this if needed -->
                <!--
                <li class="nav-item px-2">
                    <a class="nav-link" href="levelChecker.php">Register</a>
                </li>
                -->
            </ul>

            <!-- Uncomment this button if needed -->
            <!--
            <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="contactUs.php">Contact Us</a>
            -->
        </div>
    </div>
</nav>
</html>
