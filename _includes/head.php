<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./css/reboot.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Tåsjö IF</title>
</head>
<body>
	<div class="wrapper admin">
	<input type="checkbox" id="navigation" />
    <label for="navigation" class="label-menu"></label>
		<nav>
			<div class="logo">
				<a href="./">
				<img src="./images/tasjoif.jpg" class="logo__image" alt="">
				</a>
			</div>
			<ul>
			<li><a href="./">Hem</a></li>
			<li><a href="./about.php">Om klubben</a></li>
			<li><a href="#">Träningsgrupper</a></li>
			<li><a href="#">Tåsjöklassikern</a></li>
			<li><a href="#">Resultat</a></li>
			<li><a href="#">Bilder</a></li>
			<li><a href="#">Sponsring</a></li>
			<li><a href="#">Väder</a></li>
			<li><a href="https://www.facebook.com/TasjoIF">Facebook</a></li>

			<?php
				if (isset($_COOKIE['u_name'])) {
					echo '<li><a href="./admin.php">Mina sidor</a></li>';
					echo '<li>
									<form action="./_includes/logout.inc.php" method="POST">
										<button type="submit" class="btn btn-outline-primary btn-sm" name="submit">Logga ut</button>
									</form>
								</li>';
				} else {
					echo '<li><a href="./login.php" class="btn btn-outline-primary btn-sm">Logga in</a></li>';
				}
			?>

			</ul>
		</nav>
