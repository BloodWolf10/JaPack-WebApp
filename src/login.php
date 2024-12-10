<?php
// You can handle error messages here, for example:
// $error = isset($error) ? $error : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/theme.css" rel="stylesheet"> <!-- Add your custom CSS link if any -->
</head>

<body>

<?php include 'navigationbar.php'; ?> <!-- Include your navigation bar -->
<br>
<br>
<br>
<br>
<br>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Login</h1>

                <!-- Start of login form -->
                <form action="logroute.php?action=login" method="POST">
                    <!-- Username input field -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="email" class="form-control" required>
                    </div>

                    <!-- Password input field -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    
                    <!-- Display error message if any -->
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger mt-3">
                            <p><?php echo htmlspecialchars($error); ?></p>
                        </div>
                    <?php endif; ?>
                </form>
                <!-- End of login form -->
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?> <!-- Include your footer -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>