<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>
			lolyWeb
		</title>

		<!-- Meta -->
		<meta charset="utf-16">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="application-name" content="lolyWeb">
		<meta name="description" content="lolyWeb">
		<meta name="author" content="ĽøĺýĆòřᵱ">	
		<meta name="keywords" content="ĽøĺýĆòřᵱ, lolyCorp, lolyWeb, loly, VeryOldpApY">
		<meta name="color-scheme" content="dark">
		<meta name="robots" content="index, follow">

		<!-- CSS -->
		<link rel="icon" href="../img/NewCat.jpg">
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/skeleton.css">
		<link rel="stylesheet" href="../css/lolyweb.css">
	</head>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function loadMessage()
        {
            $('.messagesDown').load('view/v_message.php', 'id='+ <?php echo $_SESSION['id']?>);
        }
    </script>

	<body>
		<div class="container">
			<div class="row header">
				<div class="three columns">
					<img class="logo" src="../img/NewCat.jpg" title="logo" alt="newcat">
				</div>
				<div class="nine columns">
					<a href="Home"><h1 name='ok'>ĽøĺýĆòřᵱ</h1></a>
					<p>Hi <?php echo $_SESSION['login'] ?> !</p>
				</div>
			</div>
			<div class="row center">