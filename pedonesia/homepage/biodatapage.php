<?php 

    session_start();

    if (!isset($_SESSION['login']) and !isset($_SESSION['register'])) {
        header("Location: ../phplogin/login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Biodata Input</title>
    <link rel="stylesheet" href="styles/biodatapage.css">
</head>
<body>

<header>
    <h1>User Biodata Input</h1>
</header>

<main>
    <form id="biodataForm" action="votingpage.html" method="post" target="_blank">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="number" id="NIK" name="NIK" required>
        </div>
        <!-- Add more fields as needed -->
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</main>

<footer>
    <!-- Add footer content if needed -->
</footer>

<script src="scripts/biodatapage.js"></script>
</body>
</html>
