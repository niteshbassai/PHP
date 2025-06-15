<?php
include 'db.php';

// Fetch all subscribers from the database
try {
    $stmt = $pdo->query("SELECT * FROM subscribers");
    $subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching records: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Subscriber Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Subscriber Records</h2>  <!-- Changed heading to sound more professional -->

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Grade</th>
    </tr>
    <!-- Loop through all subscribers and display their details -->
    <?php foreach ($subscribers as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= htmlspecialchars($row['grade']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="add.php">Add New Subscriber</a>  <!-- Link to the form page -->
</body>
</html>