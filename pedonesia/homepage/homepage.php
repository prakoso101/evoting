<?php
    session_start();

    if (!isset($_SESSION['login']) and !isset($_SESSION['register'])) {
        header("Location: ../phplogin/login.php");
        exit;
    }

    if (isset($_GET['alert'])) {
        $alert_message = $_GET['alert'] === "success" ? "Registration successful!" : $_GET['alert'];
        echo "<script>alert('$alert_message');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-voting Pemilu - Smart Choices</title>
    <link rel="stylesheet" href="styles/homepage.css">
    <script src="https://cdn.jsdelivr.net/npm/web3@1.5.2/dist/web3.min.js"></script>
</head>
<body>

<header>
    <h1 class="site-title">E-voting Pemilu<span> Smart Choices</span> </h1>
    <div class="navbar">
        <div class="logo">
            <img src="images/logoPemilu-removebg-preview.png" alt="E-voting Pemilu Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#issues">Issues</a></li>
                <li><a href="#candidates">Candidates</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="../phplogin/scripts/logout.php">Log out</a></li>
            </ul>
        </nav>
        <button class="button-40 start-voting-btn" role="button">Start Voting</button>
    </div>
</header>

<main>
    <section id="issues">
        <h2>Issues</h2>
        <div class="main-content">
            <div class="concept concept-one">
                <script>
                    for (let i = 1; i < 10; i++) {
                        document.write(`<div class="hover hover-${i}"></div>`);
                    }
                </script>
                <h1>informasi</h1>
            </div>
            <div class="concept concept-two">
                <script>
                    for (let i = 1; i < 10; i++) {
                        document.write(`<div class="hover hover-${i}"></div>`);
                    }
                </script>
                <h1>informasi</h1>
            </div>
            <div class="concept concept-three">
                <script>
                    for (let i = 1; i < 10; i++) {
                        document.write(`<div class="hover hover-${i}"></div>`);
                    }
                </script>
                <h1>informasi</h1>
            </div>
        </div>
    </section>

    <section id="candidates">
        <h2 class="candidates-title">Candidates</h2>
        <div class="container">
            <h3>Candidate 1</h3>
            <!-- Candidate 1 introduction goes here -->
        </div>
        <div class="container">
            <h3>Candidate 2</h3>
            <!-- Candidate 2 introduction goes here -->
        </div>
        <div class="container">
            <h3>Candidate 3</h3>
            <!-- Candidate 3 introduction goes here -->
        </div>
    </section>

    <div id="candidateModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="candidateInfo"></div>
        </div>
    </div>

    <section id="about">
        <h2>About Us</h2>
        <div class="content-text">
            <p>This is the content text describing organization</p>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.070399235733!2d107.62715610000002!3d-6.969281999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9bc3974981d%3A0x613eec0feec9fcf7!2sTelkom%20University%20Landmark%20Tower%20%28TULT%29!5e0!3m2!1sen!2sid!4v1618892696183!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>

<script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
<footer>
    <p>&copy; 2029 E-voting Pemilu - Smart Choices | All Rights Reserved</p>
    <ul>
        <li><a href="#privacy-policy">Privacy Policy</a></li>
        <li><a href="#terms-of-service">Terms of Service</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>
</footer>

<script src="scripts/homepage.js"></script>
<script src="scripts/connection.js"></script>
</body>
</html>
