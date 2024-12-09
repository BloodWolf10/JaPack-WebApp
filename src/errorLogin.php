
<!------------------------------------------------------------------------------------------------>

<!--  UNNECESSARY PAGE, THE LOGIN CAN BE CUSTOMIZE TO ASSOCIATE THE ERROR INDICATILN ON ERROR   -->

<!------------------------------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JAPack</title>

    <link href="CSS/theme.css" rel="stylesheet" />
</head>

<body>

    <!-- Include Navigation Bar -->
    <?php include 'navigationbar.php'; ?>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <!-- Error Message Section -->
    <center>
        <div style="border: thin solid #000; padding: 20px; width: 300px;">
            <h1>Login Error</h1>
            <p>Your login attempt was unsuccessful. Please try again.</p>
            <a href="login.php"><button class="btn btn-success">Back to Login</button></a>
        </div>
    </center>

    <!-- Include Footer Navigation Bar -->
    <?php include 'footer.php'; ?>

</body>
</html>
