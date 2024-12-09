<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error Login</title>
    <link href="CSS/theme.css" rel="stylesheet">
</head>

<body>

<?php include 'navigationbar.php'; ?>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<div class="container">
    <h1 class="p-3">Login</h1>
    <form action="login.php" method="post">
        <div class="form-group col-md-12">
            <label class="col-md-3" for="username">Username:</label>
            <div class="col-md-6">
                <input type="text" id="username" name="username" required="required" /><br><br>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label for="password">Password:</label>
            <div class="col-md-6">
                <input type="password" id="password" name="password" required><br><br>
            </div>
        </div>
        <button type="submit">Login</button>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <p><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
