<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Login and registration</title>
</head>
<body>

	<div class="container">
		<h2>Sign up</h2>
		<form action="signup.php" method="POST">
			<div class = "form-group">
				<label for="firstname">First Name</label>
				<input type="text" class="form-control" id ="firstname" name="firstname" required>
			</div>
			
			<div class = "form-group">
				<label for="lastname">Last Name</label>
				<input type="text" class="form-control" id ="lastname" name="lastname" required>
			</div>

			<div class = "form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id ="username" name="username" required>
			</div>

			<div class = "form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id ="email" name="email" required>
			</div>

			<div class = "form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id ="password" name="password" required>
			</div>

			<div class = "form-group">
				<label for="repeatpassword">Repeat password</label>
				<input type="password" class="form-control" id ="repeatpassword" name="repeatpassword" required>
			</div>

			<button type="submit" class="btn btn-primary">Sign Up</button>
			
		</form>
	</div>

</body>
</html>