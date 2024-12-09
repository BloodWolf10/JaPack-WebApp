<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Page</title>
    <style>
        /* CSS for the splash page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20201026/pngtree-smooth-pink-furry-background-image_436794.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .splash-content {
            text-align: center;
            color: white;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        h3 {
            color: #fff;
            font-size: 36px;
        }
    </style>
</head>
<body>
<div class="splash-content">
    <img src="/Images/gallery/JPack-Logo.png" alt="Logo" class="logo">
    <h3>JPack Courier Services </br>Fast, Affordable, and Reliable</h3>
</div>

<?php
// PHP Redirection after 2 seconds
header("Refresh: 3; url=index.php");
exit();
?>
</body>
</html>
