<?php

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo '<h4 style="color: green">Connected to database sucessfully.</h4>';
}
catch (PDOException $e) {
    echo '<h4 style="color: red">Fail to connect to database.</h4>';
}