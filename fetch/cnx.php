<?php

// Database connection parameters
$dsn = 'mysql:host=localhost;dbname=ecole';
$username = 'root';
$password = '';

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful.";

} catch(PDOException $e) {
    // Handle errors
    echo "Connection failed: " . $e->getMessage();
}
