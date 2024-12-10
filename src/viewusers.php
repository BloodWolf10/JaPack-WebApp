<?php
// Include the database connection
require 'db.php';

// Initialize $userList as an empty array
$userList = [];

try {
    // Fetch data from the database
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $userList = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as an associative array
} catch (PDOException $e) {
    echo "Error fetching users: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link href="CSS/theme.css" rel="stylesheet">
    

</head>
<body>

<?php include 'navigationbar.php'; ?> <!-- Include Navigation Bar -->

<section class="py-5 bg-light">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<div class="container">
    <h1 class="p-3">User List</h1>

    <!-- Table with Bootstrap 5 styling -->
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>Home Address</th>
                <th>Email Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userList as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['id']); ?></td>
                    <td><?php echo htmlspecialchars($user['fullname']); ?></td>
                    <td><?php echo htmlspecialchars($user['age']); ?></td>
                    <td><?php echo htmlspecialchars($user['gender']); ?></td>
                    <td><?php echo htmlspecialchars($user['contact']); ?></td>
                    <td><?php echo htmlspecialchars($user['address']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>

                    <!-- Edit button with link -->
                    <td>
                        <button type="button" class="btn btn-success">
                            <a href="editUser.php?id=<?php echo urlencode($user['id']); ?>" class="text-white">Edit</a>
                        </button>
                    </td>

                    <!-- Delete button with link -->
                    <td>
                        <button type="button" class="btn btn-danger">
                            <a href="deleteUser.php?id=<?php echo urlencode($user['id']); ?>" class="text-white">Delete</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Add New User Button -->
    <div class="d-flex justify-content-start">
        <button type="button" class="btn btn-primary">
            <a href="userRegister.php" class="text-white">Add New User</a>
        </button>

        <!-- Back to Dashboard Button -->
        <button type="button" class="btn btn-secondary ms-3">
            <a href="adminDashboard.php" class="text-white">Back To Dashboard</a>
        </button>
    </div>

</div>

<!-- Include Footer -->
<?php include 'footer.php'; ?>


</body>
</html>