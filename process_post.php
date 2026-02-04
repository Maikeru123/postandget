<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? "Unknown";
    $age = $_POST['age'] ?? "Unknown";

    echo "<h2>POST Data Received</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Notice how the data is not in the URL!</p>";
} else {
    echo "No POST data received.";
}


?>
