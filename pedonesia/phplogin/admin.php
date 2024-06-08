<?php

	require 'scripts/functions.php';

	if (isset($_GET['alert'])) {
	    $alert_message = $_GET['alert'] === "success" ? "Registration successful!" : $_GET['alert'];
	    echo "<script>alert('$alert_message');</script>";
	}

	$records = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Daftar Pemilih</h1>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach( $records as $field ) : ?>
			
			<tr>
				<td><?= $i; ?></td>
				<td><?= $field["username"]; ?></td>
				<td><?= $field["email"]; ?></td>
				<td><?= $field["password"]; ?></td>
			</tr>

		<?php $i++; ?>
		<?php endforeach; ?>

	</table>

</body>
</html>