<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <title>Delete User</title>
    <link href="CSS/theme.css" rel="stylesheet" />

</head>


<?php
// Include database connection
require 'db.php';

// Get the user ID from the query string
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $packageId = intval($_GET['id']);

    // Fetch the user details
    $sql = "SELECT * FROM user_package WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $packageId]);
    $package = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "<p>Package not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid or missing user ID.</p>";
    exit;
}
?>


<body>
<?php include 'navigationbar.php'; ?>
<div class="container">
    <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    <h1 class="p-3">Delete User</h1>
     <br>
     <br>
     <br>
     <p>Are you sure you want to delete <strong><?php echo htmlspecialchars($package['packageDescription']) . ' of type ' . htmlspecialchars($package['packageType']); ?></strong>?</p>

    
    <form action="packroute.php?action=delete&id=<?php echo $package['id']; ?>" method="POST">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="packagelist.php?action=index" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>
</body>
</html>