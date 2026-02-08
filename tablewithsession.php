<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Information (Simple)</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Add Patient</h2>

<form method="POST">
    <label>Patient Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Age:</label><br>
    <input type="number" name="age" required><br><br>

    <button type="submit">Add Patient</button>
</form>

<h2>Patient List</h2>

<?php
session_start(); 

// Check if form is submitted
if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age  = $_POST['age'];

    // Add the new patient to the session array
    $_SESSION['patients'][] = array(
        'name' => $name,
        'age'  => $age
    );
}

// Display the table if there are patients
if (!empty($_SESSION['patients'])) {
    echo "<table>";
    echo "<tr><th>#</th><th>Name</th><th>Age</th></tr>";

    //We need to count the total number sa patients
    $total_patients = count($_SESSION['patients']);
    for ($i = 0; $i < $total_patients; $i++) {
        
        // utilize I for indexing
        $current_patient = $_SESSION['patients'][$i];

        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>"; 
        echo "<td>" . $current_patient['name'] . "</td>";
        echo "<td>" . $current_patient['age'] . "</td>";
        echo "</tr>";   
    }
    
    echo "</table>";
} else {
    echo "<p>No patients added yet.</p>";
}
?>

</body>
</html>