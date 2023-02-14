<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['username'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>		
        <?php include('header.php'); ?>
    </head>
	<body class="loggedin">
		<nav class="navtop">
        <?php include('nav.php');?>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['username']?></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td>Administratorian</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>