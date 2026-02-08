<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        .main-container {
            max-width: 800px; /* Limits width for better readability */
            margin-top: 50px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Soft shadow */
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #0d6efd; /* Bootstrap Blue */
            color: white;
            font-weight: bold;
            border-radius: 10px 10px 0 0 !important;
        }
        .table-container {
            background: white;
            border-radius: 10px;
            overflow: hidden; /* Rounds corners of the table */
        }
    </style>
</head>
<body>

<div class="container main-container">
    
    <h2 class="text-center mb-4 text-primary">🏥 Patient Information System</h2>

    <div class="card">
        <div class="card-header">
            Add New Patient
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Patient Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input type="number" name="age" class="form-control" placeholder="Enter age" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Add Patient</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-success">
            Patient List
        </div>
        <div class="card-body">
            
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
                echo '<div class="table-responsive table-container">';
                echo '<table class="table table-striped table-hover mb-0">'; 
                echo '<thead class="table-dark"><tr><th>#</th><th>Name</th><th>Age</th></tr></thead>';
                echo '<tbody>';

                // We need to count the total number sa patients
                $total_patients = count($_SESSION['patients']);
                
                // Using FOR LOOP as requested
                for ($i = 0; $i < $total_patients; $i++) {
                    
                    // utilize I for indexing
                    $current_patient = $_SESSION['patients'][$i];

                    echo "<tr>";
                    echo "<td>" . ($i + 1) . "</td>"; 
                    echo "<td>" . $current_patient['name'] . "</td>";
                    echo "<td>" . $current_patient['age'] . "</td>";
                    echo "</tr>";   
                }
                
                echo '</tbody>';
                echo "</table>";
                echo '</div>';
            } else {
                echo '<div class="alert alert-info text-center m-0">No patients added yet.</div>';
            }
            ?>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>