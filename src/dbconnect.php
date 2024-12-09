<?php

try {
    // Database connection using PDO
    $dsn = 'mysql:host=db;dbname=japackdb;charset=utf8mb4';
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');

    $pdo = new PDO($dsn, $username, $password);

    // Set PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $table_name = "users";

    // Prepare and execute the query
    $query = "SELECT * FROM $table_name";
    $statement = $pdo->prepare($query);
    $statement->execute();

    // Display the results
    echo "<strong>$table_name</strong>";
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>" . htmlspecialchars($row['fullname'], ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>" . htmlspecialchars($row['contact'], ENT_QUOTES, 'UTF-8') . "</p>";

    }

} catch (PDOException $e) {
    // Handle errors gracefully
    echo "Database error: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
}

