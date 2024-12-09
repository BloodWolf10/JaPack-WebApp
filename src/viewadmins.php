<?php
// Sample data for admins. In a real application, you'd fetch this from a database.
$adminList = [
    ['id' => 1, 'fullname' => 'John Doe', 'age' => 30, 'gender' => 'Male', 'contact' => '1234567890', 'email' => 'john.doe@example.com', 'password' => 'password123'],
    ['id' => 2, 'fullname' => 'Jane Smith', 'age' => 28, 'gender' => 'Female', 'contact' => '0987654321', 'email' => 'jane.smith@example.com', 'password' => 'password456']
    // Add more admins here...
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <title>View Admins</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>

<!-- Include the Login Admin NavBar (can be done using PHP include or a template system) -->
<?php include 'LoginAdminNavBar.php'; ?>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<div class="container">
    <h1 class="p-3">Admin List</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminList as $admin): ?>
                <tr>
                    <td><?php echo htmlspecialchars($admin['id']); ?></td>
                    <td><?php echo htmlspecialchars($admin['fullname']); ?></td>
                    <td><?php echo htmlspecialchars($admin['age']); ?></td>
                    <td><?php echo htmlspecialchars($admin['gender']); ?></td>
                    <td><?php echo htmlspecialchars($admin['contact']); ?></td>
                    <td><?php echo htmlspecialchars($admin['email']); ?></td>
                    <td><?php echo htmlspecialchars($admin['password']); ?></td>

                    <td>
                        <button type="button" class="btn btn-success">
                            <a href="editAdmin.php?id=<?php echo urlencode($admin['id']); ?>" class="text-white">Edit</a>
                        </button>
                    </td>

                    <td>
                        <button type="button" class="btn btn-danger">
                            <a href="deleteAdmin.php?id=<?php echo urlencode($admin['id']); ?>" class="text-white">Delete</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button type="button" class="btn btn-primary btn-block">
        <a href="adminRegister.php" class="text-white">Add New Admin</a>
    </button>

    <button type="button" class="btn btn-primary btn-block">
        <a href="adashboard.php" class="text-white">Back To Dashboard</a>
    </button>

</div>

<!-- Include the Footer Navigation Bar (can be done using PHP include or a template system) -->
<?php include 'FooterNavigationBar.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
