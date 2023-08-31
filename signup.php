<?php include('process_signup.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1>Notebook Account Signup</h1>

	<form action="signup.php" method="post">
		<div class="sign_up_error">
			<?php if ($username_error): ?>
				<span><?php echo "Username Already Taken"; echo "<br>"; ?></span>
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

		<div>
			<label for="password_repeat">Password Repeat</label>
			<input type="password" id="password_repeat" name="password_repeat">
		</div>

		<div>
			<button type="submit" name="register" id="reg_button">Sign up</button><br><br><br>
		</div>
	</form>

	<form>
		<input type="button" value="Go back!" onclick="history.back()">
	</form>


</body>



</html>
