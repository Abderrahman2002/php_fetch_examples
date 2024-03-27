<?php

// Include the database connection file
include 'cnx.php';

try {
    // SQL query to select data from the etudiantes table
    $sql = "SELECT * FROM etudiantes";

    // Execute the query
    $stmt = $pdo->query($sql);

    // Fetch data using different fetch modes

    // Mode PDO::FETCH_ASSOC
    echo "\nFETCH_ASSOC:\n";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // echo "FETCH_ASSOC:\n"; // Echo FETCH_ASSOC label before each row
        print_r($row);
    }

    // Mode PDO::FETCH_NUM
    echo "\nFETCH_NUM:\n";
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        print_r($row);
    }

    // Mode PDO::FETCH_BOTH
    echo "\nFETCH_BOTH:\n";
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        print_r($row);
    }

    // Mode PDO::FETCH_OBJ
    echo "\nFETCH_OBJ:\n";
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        echo $row->numero . ", " . $row->nom . ", " . $row->prenom . "\n";
    }
} catch (PDOException $e) {
    // Handle errors
    echo "Query failed: " . $e->getMessage();
}
