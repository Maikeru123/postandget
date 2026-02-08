<?php
session_start();

// 1. INPUT: Handle the form data
if (isset($_POST['name']) && isset($_POST['age'])) {
    $_SESSION['patients'][] = [
        'name' => $_POST['name'],
        'age'  => $_POST['age']
    ];
}
?>

<?php if (!empty($_SESSION['patients'])): ?>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($_SESSION['patients'] as $patient): ?>
                
                <tr>
                    <td> <?php echo $patient['name']; ?> </td>
                    
                    <td> <?php echo $patient['age']; ?> </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
    </table>

<?php else: ?>
    <p>No patients added yet.</p>
<?php endif; ?>