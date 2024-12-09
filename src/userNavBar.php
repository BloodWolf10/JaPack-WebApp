

<!---------------------------------------------------------------------------------------->

<!--  NEED TO BE LOOKED AT AND SEE IT CHANGES CAN BE MADE FOR A PROPER IMPLIMENTATION   -->
<!----------  SHOULD BE ABLE TO USE ONE NAVIGATIONBAR TO WORK ACCROSS ALL PAGES ---------->

<!---------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<!-- NavigationBar.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container">
        <!-- Logo Link to User Dashboard -->
        <a class="navbar-brand" href="udashboard.php">
            <img src="Images/gallery/JPack-Logo.png" height="95" alt="logo" />
        </a>

        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <!-- Uncomment and Customize Links as Needed -->
            <!--
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="home.php">Home</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="services.php">Our Services</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="contactUs.php">Find Us</a></li>
                <li class="nav-item px-2"><a class="nav-link" href="aboutUs.php">About Us</a></li>
            </ul>
            -->

            <!-- Right-Side Navbar Links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link" href="login.php">Log Out</a>
                </li>
                <!-- Uncomment if Registration Link is Needed -->
                <!--
                <li class="nav-item px-2">
                    <a class="nav-link" href="levelChecker.php">Register</a>
                </li>
                -->
            </ul>

            <!-- Uncomment if Contact Us Button is Needed -->
            <!-- <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="contactUs.php">Contact Us</a> -->
        </div>
    </div>
</nav>
</html>
