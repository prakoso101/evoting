<?php
	session_start();

	if (isset($_SESSION['register'])) {
		header("Location: ../homepage/homepage.php");
		exit;
	}

	if (isset($_GET['alert'])) {
	    $alert_message = $_GET['alert'] === "success" ? "Registration successful!" : $_GET['alert'];
	    echo "<script>alert('$alert_message');</script>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/register.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<div class="wrapper">
		<form action="scripts/authenticate.php" method="post">
			<h1>Registration</h1>

			<div class="input-box">
				<div class="input-field">
					<input type="text" placeholder="Username" name="username" autocomplete="off" required>
					<i class='bx bxs-user'></i>
				</div>
				<div class="input-field">
					<input type="email" placeholder="Email" name="email" autocomplete="off" required>
					<i class='bx bxs-envelope'></i>
				</div>
			</div>

			<div class="input-box">
				<div class="input-field">
					<input type="password" placeholder="Password" name="password" required>
					<i class='bx bxs-lock-alt'></i>
				</div>
				<div class="input-field">
					<input type="password" placeholder="Confirm Password" name="confirm" required>
					<i class='bx bxs-lock-alt'></i>
				</div>
			</div>

			<label>
				<input type="checkbox" name="agree">I hereby declare that the above information provided is true and correct
			</label>

			<button type="submit" class="btn" name="register">Register</button>

			<div class="login-link">
				<p>Have an account? <a href="login.php">Log in</a></p>
			</div>
		</form>
	</div>
</body>
</html>