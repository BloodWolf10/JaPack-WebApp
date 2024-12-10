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
    $userId = intval($_GET['id']);

    // Fetch the user details
    $sql = "SELECT * FROM users WHERE id = :id LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "<p>User not found.</p>";
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
    <h1 class="p-3">Delete User</h1>
     <br>
     <br>
     <br>
    <p>Are you sure you want to delete <strong><?php echo htmlspecialchars($user['fullname']); ?></strong>?</p>
    
    <form action="routing.php?action=delete&id=<?php echo $user['id']; ?>" method="POST">
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="viewusers.php?action=index" class="btn btn-secondary">Cancel</a>
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