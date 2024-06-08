<?php 

	session_start();

	if (isset($_SESSION['login']) or isset($_SESSION['register'])) {
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
	<link rel="stylesheet" href="styles/login.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

	<div class="wrapper">
		<form action="scripts/authenticate.php" method="post">
			<h1>Login</h1>
			<div class="input-box">
				<input type="text" placeholder="Username" name="username" autocomplete="off" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" placeholder="Password" name="password" required>
				<i class='bx bxs-lock-alt'></i>
			</div>
			<div class="remember-forgot">
				<label>
					<input type="checkbox" name="remember">Remember me
				</label>
				<a href="#">Forgot password?</a>
			</div>
			<button type="submit" class="btn" name="login">Log in</button>
			<div class="register-link">
				<p>Don't have an account? <a href="register.php">Register</a></p>
			</div>
		</form>
	</div>

</body>
</html>