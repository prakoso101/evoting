<?php
	session_start();
	require 'functions.php';

	if( isset($_POST["login"]) ) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = mysqli_query($conn, "SELECT * FROM account WHERE username = '$username'");

		if( mysqli_num_rows($result) === 1 ) {
			$record = mysqli_fetch_assoc($result);
			if( password_verify($password, $record['password']) ) {
				$_SESSION['login'] = true;

				if($record['role'] == 'admin') {
					$_SESSION['admin'] = true;
					header("Location: ../../adminpanel/adminpanel.php");
					exit;
				}

				header("Location: ../../homepage/homepage.php");
				exit;
			}
		}

    	header("Location: ../login.php?alert=Username / password is incorrect!");
        exit;

	}

	if (isset($_POST['register'])) {
	    $registration_feedback = register($_POST);
	    if ($registration_feedback === "Registration successful") {
	        // Redirect to registration page with success message
	    	$_SESSION['register'] = true;

	        header("Location: ../../homepage/homepage.php?alert=success");
	        exit;
	    } else {
	        // Redirect to registration page with error message
	        header("Location: ../register.php?alert=$registration_feedback");
	        exit;
	    }
	}

?>