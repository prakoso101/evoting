<?php

    session_start();

    if (!isset($_SESSION['login']) or !isset($_SESSION['admin'])) {
        header("Location: ../homepage/homepage.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Candidates</title>
    <link rel="stylesheet" href="styles/manage.css">
</head>
<body>

<header>
    <h1>Admin - Manage Candidates</h1>
</header>

<main>
    <section id="add-candidate">
        <h2>Add Candidate</h2>
        <form id="candidateForm">
            <div class="form-group">
                <label for="candidateName">Candidate Name:</label>
                <input type="text" id="candidateName" name="candidateName" required>
            </div>
            <div class="form-group">
                <label for="candidateDescription">Description:</label>
                <textarea id="candidateDescription" name="candidateDescription" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Candidate">
            </div>
        </form>
    </section>

    <section id="candidates">
        <h2>Current Candidates</h2>
        <div id="candidateList">
            <!-- Candidates will be dynamically added here -->
        </div>
    </section>

    <section id="results">
        <h2>Voting Results</h2>
        <div id="resultsList">
            <!-- Voting results will be dynamically added here -->
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2029 E-voting Pemilu - Smart Choices | All Rights Reserved</p>
</footer>

<script src="scripts/manage.js"></script>
</body>
</html>
