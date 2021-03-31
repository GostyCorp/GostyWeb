<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/fontAwesome/css/all.css">
		<link rel="stylesheet" href="css/lolyWeb.css">
		<link rel="icon" href="img/NewCat.jpg">
		<meta charset="utf-16">
		<title>
			lolyWeb
		</title>
	</head>
	<body onload="SwapDiv('project')">
		<div class="header">
			<img class="logo" src=img/NewCat.jpg>
			<div class="navig">
				<nav>
					<ul>
						<li>
							<a href="#" onclick="SwapDiv('home')">>Home</a>
						</li>
						<li>
							<a href="#" onclick="SwapDiv('presentation')">>À Propos</a>
						</li>
						<li>
							<a href="#" onclick="SwapDiv('project')">>Projet</a>
						</li>
						<li>
							<a href="#" onclick="SwapDiv('backup')">>Backup</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<main class="page">
			<div class="top">
				<div class="titre">
					<h1>ĽøĺýĆòřᵱ</h1>
				</div>
			</div>
			<div class="content">
				<div class="home">
					<?php
						include("page/home.php");
					?>
				</div>
				<div class="presentation">
					<?php
						include("page/presentation.php");
					?>
				</div>
				<div class="project">
					<?php
						include("page/project.php");
					?>
				</div>
				<div class="backup">
					<?php
						include("page/backup.php");
					?>
				</div>
			</div>
		</main>
	</body>
</html>
<script src="js/slide.js"></script>	
<script src="js/matrix.js"></script>