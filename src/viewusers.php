<!-- <?php
// Sample data for users. In a real application, you'd fetch this from a database.
//$userList = [
  //  ['id' => 1, 'fullname' => 'John Doe', 'age' => 30, 'gender' => 'Male', 'contact' => '1234567890', 'address' => '1234 Elm St', 'email' => 'john.doe@example.com', 'password' => 'password123'],
   // ['id' => 2, 'fullname' => 'Jane Smith', 'age' => 28, 'gender' => 'Female', 'contact' => '0987654321', 'address' => '5678 Oak St', 'email' => 'jane.smith@example.com', 'password' => 'password456']
    // Add more users here...
//];
//?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <title>View Users</title>
    <link href="CSS/theme.css" rel="stylesheet" />
</head>
<body>

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



<!-- Include the Login Admin NavBar (can be done using PHP include or a template system) -->
<?php include 'navigationbar.php'; ?>

<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size" style="background-image:url(Images/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
    </div>
</section>

<div class="container">
    <h1 class="p-3">User List</h1>

    <table class="table table-bordered">
        <thead>
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
                    

                    <td>
                        <button type="button" class="btn btn-success">
                            <a href="editUser.php?id=<?php echo urlencode($user['id']); ?>" class="text-white">Edit</a>
                        </button>
                    </td>

                    <td>
                        <button type="button" class="btn btn-danger">
                            <a href="deleteUser.php?id=<?php echo urlencode($user['id']); ?>" class="text-white">Delete</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button type="button" class="btn btn-primary btn-block">
        <a href="userRegister.php" class="text-white">Add New User</a>
    </button>

    <button type="button" class="btn btn-primary btn-block">
        <a href="adashboard.php" class="text-white">Back To Dashboard</a>
    </button>

</div>

<!-- Include the Footer Navigation Bar (can be done using PHP include or a template system) -->
<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
