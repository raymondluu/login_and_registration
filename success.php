<?php
	session_start();
?>
<html>
	<head>
		<title>Login and Registration</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<?= "<p>Hello, {$_SESSION['first_name']}, you are now logged in!</p>" ?>
			<form action="process.php" method="post">
				<input type="hidden" name="action" value="logout">
				<input type="submit" name="logout" value="Logout!">
			</form>
		</div>
	</body>
</html>