<!DOCTYPE html>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<html>
	<head>
		<title>
			lolyWeb
		</title>
		<link rel="icon" href="img/NewCat.jpg">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/skeleton.css">
		<link rel="stylesheet" href="css/lolyweb.css">
		<meta charset="utf-16">
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
					<img class="logo" src="img/NewCat.jpg" title="logo">
				</div>
				<div class="nine columns">
					<a href="Home"><h1 name='ok'>ĽøĺýĆòřᵱ</h1></a>
					<p>Hi <?php echo $_SESSION['login'] ?> !</p>
				</div>
			</div>
			<div class="row center">