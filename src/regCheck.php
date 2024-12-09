<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Level</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>

<body>

<!-- NAV BAR -->
<?php include 'navigationbar.php'; ?>
<!-- NAV BAR -->

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
    <br />
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Choose Registration Role</h2>
                <div class="list-group">
                    <a href="userRegister.php" class="list-group-item list-group-item-action">User</a>
                    <a href="adminRegister.php" class="list-group-item list-group-item-action">Become a member of staff</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER NAV BAR -->
<?php include 'footer.php'; ?>
<!-- FOOTER NAV BAR -->

</body>
</html>
