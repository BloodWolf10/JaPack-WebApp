<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <h1 class="p-3"> User Register </h1>

    <form action="/saveUser" method="post">
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
                <label class="col-md-3" for="Address"> Home Address </label>
                <div class="col-md-6">
                    <input type="text" name="address" id="address" class="form-control input-sm" required="required" />
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

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3" for="Password"> Password </label>
                <div class="col-md-6">
                    <input type="password" name="password" id="password" class="form-control input-sm" required="required" />
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

<!-- Footer NAV BAR -->
<?php include 'footer.php'; ?>

</body>
</html>
