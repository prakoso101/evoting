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
    <title>Voting Page</title>
    <link rel="stylesheet" href="styles/votingpage.css">
</head>
<body>

<header>
    <h1>Voting</h1>
</header>

<main>
    <div class="image-container">
        <!-- Images will be dynamically added here -->
    </div>
</main>

<footer>
    &copy; 2024 Your Company. All rights reserved.
</footer>

<script src="scripts/votingpage.js"></script>
</body>
</html>
