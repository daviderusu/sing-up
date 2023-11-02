<?php

session_start();

if (!isset($_SESSION["username"])) {
	header ("Location: loginform.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome page</title>
</head>
<body>

	<div class="container">
		<h2> Welcome, <?php echo $_SESSION['username']; ?></h2>
		<a href="logout.php" class="btn btn-danger">Logout</a>

	</div>

</body>
</html>

