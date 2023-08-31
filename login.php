<!DOCTYPE html>

<html>
<head>
	<title>Notebook Signup</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>

<body>
	<h1> Notebook Login</h1>

	<form action="process_signup.php" method="post">
		<div class="sign_up_error">
			<?php if (isset($username)): ?>
				<span><?php echo "Username already taken!"; echo "<br>"; ?></span>
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

		<button>Login</button>
	</form>

	<form action="signup.php">
		<h3>Don't have an Account?</h3>
		<button type="submit">Sign up</button>
	</form>


</body>

</html>
