<?php include 'navigationbar.php'; ?>

<!DOCTYPE html>
< lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
 <br>
<body>

<?php
// Include the database connection
require 'db.php';

// Check if the id is provided in the query string
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $userId = intval($_GET['id']);

    try {
        // Fetch user details from the database
        $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $userId]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If user not found, handle the error
        if (!$user) {
            echo "<p>User not found.</p>";
            exit;
        }
    } catch (PDOException $e) {
        echo "Error fetching user: " . $e->getMessage();
        exit;
    }
} else {
    echo "<p>Invalid or missing user ID.</p>";
    exit;
}
?>



<?php include 'navigationbar.php'; ?>

<h1 class="p-3">Edit User</h1>

<div class="container">

    <form action="routing.php?action=update&id=<?php echo $user['id']; ?>" method="POST">
        <!-- Hidden field for the user ID -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>" class="form-control" />

        <!-- Full Name -->
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo htmlspecialchars($user['fullname']); ?>" required />
        </div>

        <!-- Age -->
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="<?php echo htmlspecialchars($user['age']); ?>" required />
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label>Gender</label><br>
            <label class="form-check-label">
                <input type="radio" name="gender" value="Male" <?php echo ($user['gender'] == 'Male') ? 'checked' : ''; ?> /> Male
            </label>
            <label class="form-check-label">
                <input type="radio" name="gender" value="Female" <?php echo ($user['gender'] == 'Female') ? 'checked' : ''; ?> /> Female
            </label>
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo htmlspecialchars($user['address']); ?>" required />
        </div>

        <!-- Contact -->
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" name="contact" id="contact" class="form-control" value="<?php echo htmlspecialchars($user['contact']); ?>" required />
        </div>

        <!-- Email -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" required />
        </div>

        <!-- Password -->
        <!-- <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control" value="<?php echo htmlspecialchars($user['password']); ?>" required />
        </div> -->
          <br>
        <!-- Submit -->
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="viewusers.php?action=index" class="btn btn-secondary">Cancel</a>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Footer NAV BAR -->
<?php include 'footer.php'; ?>
</body>
</html>