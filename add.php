<!DOCTYPE html>
<html>
<head>
    <title>Add Subscriber</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Page Header -->
<h1>Student Subscription Form</h1>
<p>Please fill out the form below to subscribe and record your academic details.</p>

<!-- Subscription Form -->
<form action="submit.php" method="post">
    <!-- Name Field -->
    <label for="name">Full Name:</label><br>
    <input type="text" name="name" id="name" required><br><br>

    <!-- Email Field -->
    <label for="email">Email Address:</label><br>
    <input type="email" name="email" id="email" required><br><br>

    <!-- Course Field -->
    <label for="course">Course Name:</label><br>
    <input type="text" name="course" id="course" required><br><br>

    <!-- Grade Field -->
    <label for="grade">Grade:</label><br>
    <input type="text" name="grade" id="grade" required><br><br>

    <!-- Submit Button -->
    <input type="submit" value="Submit">
</form>

<!-- Link to view all subscribers -->
<br>
<a href="view.php">Click here to view all subscribers</a>

</body>
</html>