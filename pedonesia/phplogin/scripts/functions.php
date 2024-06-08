<?php 
	$conn = mysqli_connect("localhost", "root", "", "e_voting");

	function query($query) {
		global $conn;

		$result = mysqli_query($conn, $query);

		$records = [];

		while( $record = mysqli_fetch_assoc($result) ) {
			$records[] = $record;
		}

		return $records;
	}

	function register($data) {
		global $conn;

		$username = strtolower(stripslashes($data["username"]));
		$email = strtolower(stripslashes($data["email"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$confirm = mysqli_real_escape_string($conn, $data["confirm"]);

		$result = mysqli_query($conn, "SELECT username FROM account WHERE username = '$username'");

		if (mysqli_fetch_assoc($result)) {
	        return "Username unavailable";
	    }

	    if ($password !== $confirm) {
	        return "Confirm password does not match";
	    }

		$password = password_hash($password, PASSWORD_DEFAULT);

		if (mysqli_query($conn, "INSERT INTO account (id, username, email, password) VALUES('', '$username', '$email', '$password')")) {
	        return "Registration successful";
	    } else {
	        return mysqli_error($conn);
	    }

	}

?>