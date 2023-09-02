<?php include('process_login.php')?>
<!DOCTYPE html>

<html>
<head>
	<title>Notebook Signup</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1> Notebook Login</h1>

	<form action="login.php" method="post">
		<div class="log_in_error">
			<?php if (isset($login_error)): ?>
				<span><?php echo $login_error; echo "<br>"; ?></span>
			<?php endif ?>
		</div>
		
		<div>
			<label for="username">Username</label>
			<input type="test" id="username" name="username">
		</div>
	
		<div>
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
		</div>

		<button type="submit" name="login_button" id="login_button">Log In</button>
	</form>

	<form action="signup.php">
		<h3>Don't have an Account?</h3>
		<button type="submit">Sign up</button>
	</form>

</body>

</html>
