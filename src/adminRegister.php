<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ISO-8859-1">
    <title>User Registration</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>

<body>

<!-- NAV BAR -->
<?php include 'navigationbar.php'; ?>
<!-- NAV BAR -->

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<!-- FORM -->
<div class="container">
    <h1 class="p-3">Staff Registration </h1>

    <form action="/saveAdmin" method="post">
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="FullName"> Full Name </label>
                <div class="col-md-6">
                    <input type="text" name="fullname" id="fullname" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Age"> Age </label>
                <div class="col-md-6">
                    <input type="text" name="age" id="age" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3"> Gender </label>
                <div class="col-md-6">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Male" /> Male
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="Female" /> Female
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Contact"> Contact Number </label>
                <div class="col-md-6">
                    <input type="text" name="contact" id="contact" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Password"> Password </label>
                <div class="col-md-6">
                    <input type="password" name="password" id="password" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Email"> Email Address </label>
                <div class="col-md-6">
                    <input type="email" name="email" id="email" class="form-control input-sm" required="required" />
                </div>
            </div>
        </div>
        <br />

        <!-- REGISTER BUTTON INSIDE OF FORM -->
        <div class="row p-2">
            <div class="col-md-2">
                <button class="btn btn-register btn-warning">REGISTER</button>
            </div>
        </div>
        <!-- REGISTER BUTTON INSIDE OF FORM -->
    </form>
</div>
<!-- FORM -->

<!-- <section> begin ============================-->
<section class="bg-900 pb-0 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
                <a class="text-decoration-none" href="#"><img src="Images/gallery/footer-logo.png" height="51" alt="" /></a>
                <p class="text-500 my-4">The most trusted Courier<br />company in your area.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                <button class="btn btn-primary px-2" type="submit">
                    <i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:876-276-4167">Call us to delivery 876-276-4167</a>
                </button>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2"></div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> Customer Care</h5>
                <ul class="list-unstyled mb-md-4 mb-lg-0">
                    <li class="lh-lg"><a class="text-500" href="aboutUs.php">About Us</a></li>
                    <li class="lh-lg"><a class="text-500" href="contactUs.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- <section> begin ============================-->
<section class="py-0 bg-1000">
    <div class="container">
        <div class="row justify-content-md-between justify-content-evenly py-4">
            <center><p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; JPack, 2024</p></center>
        </div>
    </div>
</section>
<!-- <section> close ============================-->

<!-- Footer NAV BAR -->
</body>
</html>
