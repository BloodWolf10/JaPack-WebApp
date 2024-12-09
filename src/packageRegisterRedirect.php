<?php
// You may include any necessary PHP files, such as a session check or database connections
// For example, you can include navigation and footer files
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Await</title>
    <link href="CSS/theme.css" rel="stylesheet">
</head>
<body>

<!-- Include Navigation Bar (assuming you have a file called navigationBar.php for the navbar) -->
<?php include('navigationBar.php'); ?> <!-- Include your navigation bar here -->

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<center>

    <div style="border:thin">
        <h1>Customer ID Does Not Exist!</h1>

        <p>Please look out for an email from us with your correct User ID.</p>

        <!-- Go to Package Registration Form -->
        <a href="registerPackage.php"><button class="btn btn-success">Go to Package Registration Form</button></a>
    </div>
</center>

<!-- Include Footer (assuming you have a file called footerNavigationBar.php for the footer) -->
<?php include('footerNavigationBar.php'); ?> <!-- Include your footer here -->

</body>
</html>
