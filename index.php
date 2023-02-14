<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
			<?php

				if(isset($_POST['username'])&&isset($_POST['password'])){
					if ($_POST['username']=='admin' && $_POST['password']=='admin123') {
						$_SESSION['username'] = $_POST['username'];
						header('Location: home.php');

					} else {
						echo "<div class='notif'><i class='fas fa-exclamation-triangle'></i> Wrong username or password!</div>";
					}
				}
			?>
		</div>
	</body>
</html>