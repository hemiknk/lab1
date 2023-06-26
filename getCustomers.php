<?php
//
// SQLite database file path
$databaseFile = "database.sqlite3";

try {
    // Open SQLite database connection
    $db = new SQLite3($databaseFile);

    // Query to fetch customers
    $query = "SELECT * FROM customers";
    $result = $db->query($query);

    $customers = [];

    // Iterate over the result set
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        // Access individual columns using their names
        $customers[] = $row;
    }

    // Close the database connection
    $db->close();

    echo json_encode($customers);
} catch (Exception $e) {
    // Handle any exceptions that occur
    echo "Error: " . $e->getMessage();
}
