<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Await</title>
    <link href="/CSS/theme.css" rel="stylesheet">
</head>
<body>

    <!-- Include Navigation Bar -->
    <?php include 'navigationbar.php'; ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <center>
        <div style="border: thin solid #000; padding: 20px;">
            <h1>Thank You For Registering!</h1>

            <p>Please look out for an email from us with your User ID.</p>
            <p>You will need this ID to register your packages.</p>
            <p>Any attempts to register a package without a User ID will result in packages being lost.</p>

            <!-- Replace Thymeleaf link with standard PHP link -->
            <a href="login.php" class="btn btn-success">Go to Login</a>
        </div>
    </center>

    <!-- Include Footer Navigation Bar -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
